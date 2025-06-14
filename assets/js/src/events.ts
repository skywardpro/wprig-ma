interface Event {
    title: string;
    start_date: string;
    end_date: string;
    location: string;
    categories: string[];
    description: string;
    url: string;
}

class EventsManager {
    private events: Event[] = [];
    private eventsContainer: HTMLElement | null = null;
    private eventTemplate: HTMLTemplateElement | null = null;
    private categoryFilter: HTMLElement | null = null;
    private locationFilter: HTMLElement | null = null;
    private selectedCategories: Set<string> = new Set();
    private selectedLocations: Set<string> = new Set();
    private currentPage: number = 1;
    private eventsPerPage: number = 5;
    private loadMoreButton: HTMLElement | null = null;
    private loadLessButton: HTMLElement | null = null;
    private calendarTitle: HTMLElement | null = null;
    private calendarDays: HTMLElement | null = null;
    private prevMonthButton: HTMLElement | null = null;
    private nextMonthButton: HTMLElement | null = null;
    private currentDate: Date = new Date();
    private minDate: Date | null = null;
    private maxDate: Date | null = null;
    private selectedDate: Date | null = null;

    constructor() {
        this.init();
    }

    private init(): void {
        this.eventsContainer = document.querySelector('.events__items');
        this.eventTemplate = document.getElementById('events__item') as HTMLTemplateElement;
        this.categoryFilter = document.querySelector('.events__filter--category');
        this.locationFilter = document.querySelector('.events__filter--location');
        this.loadMoreButton = document.querySelector('.events__button--more');
        this.loadLessButton = document.querySelector('.events__button--less');
        this.calendarTitle = document.querySelector('.events__calendar__title');
        this.calendarDays = document.querySelector('.events__calendar__days');
        this.prevMonthButton = document.querySelector('.events__calendar__nav--prev');
        this.nextMonthButton = document.querySelector('.events__calendar__nav--next');
        
        if (this.eventsContainer && this.eventTemplate) {
            this.parseEvents();
            this.populateFilters();
            this.setupFilterToggles();
            this.setupFilterSelections();
            this.setupPaginationButtons();
            this.setupCalendar();
            this.setupResetButton();
            this.renderEvents();
        }
    }

    private setupFilterToggles(): void {
        const filterTitles = document.querySelectorAll('.events__filter__title');
        filterTitles.forEach(title => {
            title.addEventListener('click', (e) => {
                const filter = (e.target as HTMLElement).closest('.events__filter');
                if (filter) {
                    // Close other filters
                    document.querySelectorAll('.events__filter.active').forEach(activeFilter => {
                        if (activeFilter !== filter) {
                            activeFilter.classList.remove('active');
                        }
                    });
                    // Toggle current filter
                    filter.classList.toggle('active');
                }
            });
        });

        // Close filters when clicking outside
        document.addEventListener('click', (e) => {
            if (!(e.target as HTMLElement).closest('.events__filter')) {
                document.querySelectorAll('.events__filter.active').forEach(filter => {
                    filter.classList.remove('active');
                });
            }
        });
    }

    private setupFilterSelections(): void {
        const filterItems = document.querySelectorAll('.events__filter__dropdown__item');
        filterItems.forEach(item => {
            item.addEventListener('click', (e) => {
                const filterItem = e.target as HTMLElement;
                const filterType = filterItem.closest('.events__filter--category') ? 'category' : 'location';
                const value = filterItem.textContent || '';

                if (filterType === 'category') {
                    if (this.selectedCategories.has(value)) {
                        this.selectedCategories.delete(value);
                        filterItem.classList.remove('selected');
                    } else {
                        this.selectedCategories.add(value);
                        filterItem.classList.add('selected');
                    }
                } else {
                    if (this.selectedLocations.has(value)) {
                        this.selectedLocations.delete(value);
                        filterItem.classList.remove('selected');
                    } else {
                        this.selectedLocations.add(value);
                        filterItem.classList.add('selected');
                    }
                }

                // Reset to first page when filters change
                this.currentPage = 1;
                this.renderEvents();
            });
        });
    }

    private setupPaginationButtons(): void {
        if (this.loadMoreButton) {
            this.loadMoreButton.addEventListener('click', (e) => {
                if (!(e.target as HTMLElement).classList.contains('disabled')) {
                    this.currentPage++;
                    this.renderEvents(true);
                }
            });
        }

        if (this.loadLessButton) {
            this.loadLessButton.addEventListener('click', (e) => {
                if (!(e.target as HTMLElement).classList.contains('disabled')) {
                    this.currentPage--;
                    this.renderEvents(false);
                }
            });
        }
    }

    private updatePaginationButtons(filteredEvents: Event[]): void {
        if (!this.loadMoreButton || !this.loadLessButton) return;

        const totalPages = Math.ceil(filteredEvents.length / this.eventsPerPage);
        
        // If 5 or fewer events, disable both buttons
        if (filteredEvents.length <= this.eventsPerPage) {
            this.loadMoreButton.classList.add('disabled');
            this.loadLessButton.classList.add('disabled');
            return;
        }

        // Update button states based on current page
        if (this.currentPage >= totalPages) {
            this.loadMoreButton.classList.add('disabled');
        } else {
            this.loadMoreButton.classList.remove('disabled');
        }

        if (this.currentPage <= 1) {
            this.loadLessButton.classList.add('disabled');
        } else {
            this.loadLessButton.classList.remove('disabled');
        }
    }

    private parseEvents(): void {
        const jsonElement = document.querySelector('.events__json');
        if (jsonElement) {
            try {
                const jsonString = jsonElement.textContent?.trim() || '[]';
                console.log('Parsing JSON:', jsonString); // Debug log
                this.events = JSON.parse(jsonString);
                console.log('Parsed events:', this.events); // Debug log
            } catch (error) {
                console.error('Error parsing events JSON:', error);
                this.events = [];
            }
        } else {
            console.error('Events JSON element not found');
        }
    }

    private populateFilters(): void {
        if (!this.events.length) return;

        // Get unique categories and locations
        const categories = new Set<string>();
        const locations = new Set<string>();

        this.events.forEach(event => {
            event.categories.forEach(category => categories.add(category));
            locations.add(event.location);
        });

        // Populate category filter
        const categoryDropdown = this.categoryFilter?.querySelector('.events__filter__dropdown');
        if (categoryDropdown) {
            categoryDropdown.innerHTML = '';
            categories.forEach(category => {
                const item = document.createElement('div');
                item.className = 'events__filter__dropdown__item';
                item.textContent = category;
                categoryDropdown.appendChild(item);
            });
        }

        // Populate location filter
        const locationDropdown = this.locationFilter?.querySelector('.events__filter__dropdown');
        if (locationDropdown) {
            locationDropdown.innerHTML = '';
            locations.forEach(location => {
                const item = document.createElement('div');
                item.className = 'events__filter__dropdown__item';
                item.textContent = location;
                locationDropdown.appendChild(item);
            });
        }
    }

    private isEventInPast(event: Event): boolean {
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        const endDate = new Date(event.end_date);
        endDate.setHours(0, 0, 0, 0);
        
        return endDate < today;
    }

    private formatDate(dateString: string): string {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    }

    private setupCalendar(): void {
        // Find min and max dates from events
        if (this.events.length > 0) {
            this.minDate = new Date(Math.min(...this.events.map(e => new Date(e.start_date).getTime())));
            this.maxDate = new Date(Math.max(...this.events.map(e => new Date(e.start_date).getTime())));
        }

        // Set current date to first day of current month
        this.currentDate = new Date();
        this.currentDate.setDate(1);

        // Setup calendar navigation
        if (this.prevMonthButton && this.nextMonthButton) {
            this.prevMonthButton.addEventListener('click', () => {
                const newDate = new Date(this.currentDate);
                newDate.setMonth(newDate.getMonth() - 1);
                
                // Check if new date is before min date
                if (this.minDate && newDate < this.minDate) {
                    return;
                }
                
                this.currentDate = newDate;
                this.renderCalendar();
            });

            this.nextMonthButton.addEventListener('click', () => {
                const newDate = new Date(this.currentDate);
                newDate.setMonth(newDate.getMonth() + 1);
                
                // Check if new date is after max date
                if (this.maxDate && newDate > this.maxDate) {
                    return;
                }
                
                this.currentDate = newDate;
                this.renderCalendar();
            });
        }

        this.renderCalendar();
    }

    private renderCalendar(): void {
        if (!this.calendarTitle || !this.calendarDays || !this.prevMonthButton || !this.nextMonthButton) return;

        // Update calendar title
        this.calendarTitle.textContent = this.currentDate.toLocaleDateString('en-US', {
            month: 'long',
            year: 'numeric'
        });

        // Update navigation buttons state
        if (this.minDate) {
            const prevMonthDate = new Date(this.currentDate);
            prevMonthDate.setMonth(prevMonthDate.getMonth() - 1);
            this.prevMonthButton.classList.toggle('disabled', prevMonthDate < this.minDate);
        }

        if (this.maxDate) {
            const nextMonthDate = new Date(this.currentDate);
            nextMonthDate.setMonth(nextMonthDate.getMonth() + 1);
            this.nextMonthButton.classList.toggle('disabled', nextMonthDate > this.maxDate);
        }

        // Clear calendar days
        this.calendarDays.innerHTML = '';

        // Get first day of month and last day of month
        const firstDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), 1);
        const lastDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 0);

        // Get day of week (0-6, where 0 is Sunday)
        let firstDayOfWeek = firstDay.getDay();
        // Convert to Monday-based (0-6, where 0 is Monday)
        firstDayOfWeek = firstDayOfWeek === 0 ? 6 : firstDayOfWeek - 1;

        // Add empty cells for days before first day of month
        for (let i = 0; i < firstDayOfWeek; i++) {
            const emptyDay = document.createElement('div');
            emptyDay.className = 'events__calendar__day disabled';
            this.calendarDays.appendChild(emptyDay);
        }

        // Add days of month
        for (let day = 1; day <= lastDay.getDate(); day++) {
            const date = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), day);
            const dayElement = document.createElement('div');
            dayElement.className = 'events__calendar__day';
            dayElement.textContent = day.toString();

            // Check if date is within min and max range
            if (this.minDate && this.maxDate) {
                if (date < this.minDate || date > this.maxDate) {
                    dayElement.classList.add('disabled');
                }
            }

            // Check if there are events on this date
            const hasEvent = this.events.some(event => {
                const eventDate = new Date(event.start_date);
                return eventDate.getFullYear() === date.getFullYear() &&
                       eventDate.getMonth() === date.getMonth() &&
                       eventDate.getDate() === date.getDate();
            });

            if (hasEvent) {
                dayElement.classList.add('has-event');
            }

            // Check if this is the selected date
            if (this.selectedDate && 
                date.getFullYear() === this.selectedDate.getFullYear() &&
                date.getMonth() === this.selectedDate.getMonth() &&
                date.getDate() === this.selectedDate.getDate()) {
                dayElement.classList.add('selected');
            }

            // Add click handler
            dayElement.addEventListener('click', () => {
                if (!dayElement.classList.contains('disabled')) {
                    // Remove selected class from all days
                    this.calendarDays?.querySelectorAll('.events__calendar__day').forEach(d => {
                        d.classList.remove('selected');
                    });
                    // Add selected class to clicked day
                    dayElement.classList.add('selected');
                    
                    // Set selected date
                    this.selectedDate = date;
                    
                    // Reset to first page and render events
                    this.currentPage = 1;
                    this.renderEvents();
                }
            });

            this.calendarDays.appendChild(dayElement);
        }
    }

    private renderEvents(isLoadingMore: boolean = false): void {
        if (!this.eventsContainer || !this.eventTemplate) return;

        // Clear existing events only if we're not loading more
        if (!isLoadingMore) {
            this.eventsContainer.innerHTML = '';
        }

        // Filter and sort events
        const filteredEvents = this.events
            .filter(event => {
                // Date filter (if date is selected)
                if (this.selectedDate) {
                    const eventDate = new Date(event.start_date);
                    const isSameDate = eventDate.getFullYear() === this.selectedDate.getFullYear() &&
                                     eventDate.getMonth() === this.selectedDate.getMonth() &&
                                     eventDate.getDate() === this.selectedDate.getDate();
                    if (!isSameDate) return false;
                } else {
                    // If no date is selected, filter out past events
                    if (this.isEventInPast(event)) return false;
                }

                // Category filter (OR logic within categories)
                if (this.selectedCategories.size > 0) {
                    const hasSelectedCategory = event.categories.some(category => 
                        this.selectedCategories.has(category)
                    );
                    if (!hasSelectedCategory) return false;
                }

                // Location filter (OR logic within locations)
                if (this.selectedLocations.size > 0) {
                    const hasSelectedLocation = this.selectedLocations.has(event.location);
                    if (!hasSelectedLocation) return false;
                }

                return true;
            })
            .sort((a, b) => new Date(a.start_date).getTime() - new Date(b.start_date).getTime());

        if (filteredEvents.length === 0) {
            if (this.currentPage === 1) {
                const emptyTemplate = document.getElementById('events__empty') as HTMLTemplateElement;
                if (emptyTemplate) {
                    const emptyContent = emptyTemplate.content.cloneNode(true);
                    this.eventsContainer.innerHTML = '';
                    this.eventsContainer.appendChild(emptyContent);
                    
                    // Add event listener to the reset button in the empty state
                    const resetButton = this.eventsContainer.querySelector('.events__empty__btn');
                    if (resetButton) {
                        resetButton.addEventListener('click', () => {
                            // Reset category selections
                            this.selectedCategories.clear();
                            document.querySelectorAll('.events__filter--category .events__filter__dropdown__item').forEach(item => {
                                item.classList.remove('selected');
                            });

                            // Reset location selections
                            this.selectedLocations.clear();
                            document.querySelectorAll('.events__filter--location .events__filter__dropdown__item').forEach(item => {
                                item.classList.remove('selected');
                            });

                            // Reset calendar selection
                            this.selectedDate = null;
                            this.calendarDays?.querySelectorAll('.events__calendar__day').forEach(day => {
                                day.classList.remove('selected');
                            });

                            // Reset to first page
                            this.currentPage = 1;

                            // Re-render events
                            this.renderEvents();
                        });
                    }
                }
            }
            this.updatePaginationButtons(filteredEvents);
            return;
        }

        // Calculate pagination
        const startIndex = (this.currentPage - 1) * this.eventsPerPage;
        const endIndex = startIndex + this.eventsPerPage;
        const eventsToShow = filteredEvents.slice(startIndex, endIndex);

        const templateContent = this.eventTemplate.content;

        // Render each event
        eventsToShow.forEach(event => {
            const clone = templateContent.cloneNode(true) as DocumentFragment;
            
            // Set event data
            const titleElement = clone.querySelector('.events__item__title');
            const dateElement = clone.querySelector('.events__item__date');
            const locationElement = clone.querySelector('.events__item__location');
            const categoriesElement = clone.querySelector('.events__item__categories');
            const descriptionElement = clone.querySelector('.events__item__description');
            const buttonElement = clone.querySelector('.events__item__button a');

            if (titleElement) titleElement.textContent = event.title;
            if (dateElement) dateElement.textContent = `${this.formatDate(event.start_date)} - ${this.formatDate(event.end_date)}`;
            if (locationElement) locationElement.textContent = event.location;
            if (categoriesElement) categoriesElement.textContent = event.categories.join(', ');
            if (descriptionElement) descriptionElement.textContent = event.description;
            if (buttonElement) {
                buttonElement.setAttribute('href', event.url);
                buttonElement.setAttribute('target', '_blank');
            }

            if (this.eventsContainer) {
                this.eventsContainer.appendChild(clone);
            }
        });

        this.updatePaginationButtons(filteredEvents);
    }

    private setupResetButton(): void {
        const resetButtons = document.querySelectorAll('.events__filter--reset');
        resetButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Reset category selections
                this.selectedCategories.clear();
                document.querySelectorAll('.events__filter--category .events__filter__dropdown__item').forEach(item => {
                    item.classList.remove('selected');
                });

                // Reset location selections
                this.selectedLocations.clear();
                document.querySelectorAll('.events__filter--location .events__filter__dropdown__item').forEach(item => {
                    item.classList.remove('selected');
                });

                // Reset calendar selection
                this.selectedDate = null;
                this.calendarDays?.querySelectorAll('.events__calendar__day').forEach(day => {
                    day.classList.remove('selected');
                });

                // Reset to first page
                this.currentPage = 1;

                // Re-render events
                this.renderEvents();
            });
        });
    }
}

// Initialize events manager when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new EventsManager();
});
