<?php

/**
 * Template part for displaying Events Section in events page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="events" class="events my-5xl">
    <pre class="events__json is-hidden">
    [
        {
            "title": "Blockchain Summit 2024",
            "start_date": "2024-03-15",
            "end_date": "2024-03-17",
            "location": "Singapore",
            "categories": ["Blockchain", "Crypto"],
            "description": "Join industry leaders for the biggest blockchain conference in Asia",
            "url": "https://www.blockchainsummit.com"
        },
        {
            "title": "NFT World Expo",
            "start_date": "2024-04-20",
            "end_date": "2024-04-22",
            "location": "Dubai",
            "categories": ["NFT", "Web3"],
            "description": "Explore the future of digital art and collectibles",
            "url": "https://www.nftworldexpo.com"
        },
        {
            "title": "DeFi Revolution",
            "start_date": "2024-05-10",
            "end_date": "2024-05-12",
            "location": "London",
            "categories": ["DeFi", "Crypto"],
            "description": "Discover the latest in decentralized finance",
            "url": "https://www.defirevolution.com"
        },
        {
            "title": "Metaverse Conference",
            "start_date": "2025-07-01",
            "end_date": "2025-07-03",
            "location": "Tokyo",
            "categories": ["Metaverse", "Web3"],
            "description": "Experience the future of virtual worlds",
            "url": "https://www.metaverseconf.com"
        },
        {
            "title": "AI & Blockchain Forum",
            "start_date": "2025-08-15",
            "end_date": "2025-08-17",
            "location": "Berlin",
            "categories": ["AI", "Blockchain"],
            "description": "Exploring the intersection of AI and blockchain technology",
            "url": "https://www.aiblockchainforum.com"
        },
        {
            "title": "Crypto Trading Summit",
            "start_date": "2025-09-20",
            "end_date": "2025-09-22",
            "location": "New York",
            "categories": ["Crypto", "DeFi"],
            "description": "Master the art of crypto trading",
            "url": "https://www.cryptotradingsummit.com"
        },
        {
            "title": "Web3 Developers Conference",
            "start_date": "2025-10-10",
            "end_date": "2025-10-12",
            "location": "San Francisco",
            "categories": ["Web3", "Blockchain"],
            "description": "Build the future of decentralized applications",
            "url": "https://www.web3devconf.com"
        },
        {
            "title": "NFT Art Festival",
            "start_date": "2025-11-05",
            "end_date": "2025-11-07",
            "location": "Paris",
            "categories": ["NFT", "Metaverse"],
            "description": "Celebrating digital art and creativity",
            "url": "https://www.nftartfestival.com"
        },
        {
            "title": "Blockchain Security Summit",
            "start_date": "2025-12-15",
            "end_date": "2025-12-17",
            "location": "Tel Aviv",
            "categories": ["Blockchain", "Crypto"],
            "description": "Securing the future of blockchain technology",
            "url": "https://www.blockchainsecuritysummit.com"
        },
        {
            "title": "DeFi Innovation Forum",
            "start_date": "2026-01-01",
            "end_date": "2026-01-03",
            "location": "Sydney",
            "categories": ["DeFi", "Web3"],
            "description": "Innovating the future of finance",
            "url": "https://www.defiinnovationforum.com"
        },
        {
            "title": "Crypto Mining Expo",
            "start_date": "2026-02-20",
            "end_date": "2026-02-22",
            "location": "Vancouver",
            "categories": ["Crypto", "Blockchain"],
            "description": "Exploring sustainable crypto mining solutions",
            "url": "https://www.cryptominingexpo.com"
        },
        {
            "title": "AI in Web3 Summit",
            "start_date": "2026-03-15",
            "end_date": "2026-03-17",
            "location": "Seoul",
            "categories": ["AI", "Web3"],
            "description": "The future of AI in decentralized systems",
            "url": "https://www.aiweb3summit.com"
        },
        {
            "title": "Metaverse Gaming Expo",
            "start_date": "2026-04-10",
            "end_date": "2026-04-12",
            "location": "Los Angeles",
            "categories": ["Metaverse", "Gaming"],
            "description": "The future of gaming in the metaverse",
            "url": "https://www.metaversegamingexpo.com"
        },
        {
            "title": "Blockchain for Enterprise",
            "start_date": "2026-05-05",
            "end_date": "2026-05-07",
            "location": "Zurich",
            "categories": ["Blockchain", "Enterprise"],
            "description": "Enterprise blockchain solutions and implementations",
            "url": "https://www.blockchainenterprise.com"
        },
        {
            "title": "Crypto Investment Forum",
            "start_date": "2026-06-20",
            "end_date": "2026-06-22",
            "location": "Hong Kong",
            "categories": ["Crypto", "Investment"],
            "description": "Investment opportunities in the crypto space",
            "url": "https://www.cryptoinvestmentforum.com"
        }
    ]
    </pre>
	<div class="container events__holder">

		<div class="events__left">
			<!-- Filters -->
			<div class="events__filters">
				<div class="events__filter events__filter--category">
					<div class="events__filter__title">Category</div>
					<div class="events__filter__dropdown">
						<div class="events__filter__dropdown__item">Blockchain</div>
						<div class="events__filter__dropdown__item">Crypto</div>
						<div class="events__filter__dropdown__item">NFT</div>
						<div class="events__filter__dropdown__item">DeFi</div>
						<div class="events__filter__dropdown__item">Metaverse</div>
						<div class="events__filter__dropdown__item">Web3</div>
						<div class="events__filter__dropdown__item">AI</div>
					</div>
				</div>
				<div class="events__filter events__filter--location">
					<div class="events__filter__title">Location</div>
					<div class="events__filter__dropdown">
						<div class="events__filter__dropdown__item">Europe</div>
						<div class="events__filter__dropdown__item">Asia</div>
						<div class="events__filter__dropdown__item">America</div>
						<div class="events__filter__dropdown__item">Africa</div>
						<div class="events__filter__dropdown__item">Australia</div>
						<div class="events__filter__dropdown__item">Antarctica</div>
					</div>
				</div>
                <div class="events__filter events__filter--reset ml-auto">Reset All</div>
			</div>

            <div class="events__items"></div>
            <div class="events__buttons is-flex justify-content--center mt-l">
                <span class="events__button events__button--more btn--primary">Load More</span>
                <span class="events__button events__button--less btn--primary ml-l">Load Less</span>
            </div>

            <template id="events__item">
                <div class="events__item">
                    <h3 class="events__item__title"></h3>
                    <div class="events__item__date"></div>
                    <div class="events__item__location"></div>
                    <div class="events__item__categories"></div>
                    <div class="events__item__description"></div>
                    <div class="events__item__button">
                        <a href="#" class="btn--primary">View Event</a>
                    </div>
                </div>
            </template>

            <template id="events__empty">
                <div class="events__empty">
                    <h3>No events found</h3>
                    <div class="events__empty__btn btn--primary events__filter--reset">Reset All</div>
                </div>
            </template>

		</div>

        <div class="events__right">
           <div class="events__calendar">
                <div class="events__calendar__header">
                    <button class="events__calendar__nav events__calendar__nav--prev">←</button>
                    <div class="events__calendar__title"></div>
                    <button class="events__calendar__nav events__calendar__nav--next">→</button>
                </div>
                <div class="events__calendar__weekdays">
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                    <div>Sun</div>
                </div>
                <div class="events__calendar__days"></div>
           </div>
        </div>
	</div>
</section>

<style>
    .events__holder {
        display: flex;
        gap: 4rem;
    }
    .events__left {
        max-width: 70%;
        width: 100%;
    }
    .events__right {
        max-width: 30%;
        width: 100%;
    }
    .events__filter__dropdown__item {
        cursor: pointer;
    }
    .events__items {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .events__item {
        background-color: #f0f0f0;
        padding: 1rem;
        border-radius: 0.5rem;
    }
    .events__filters {
        display: flex;
        gap: 4rem;
        margin-bottom: 2rem;
    }
    .events__filter {
        width: max-content;
        padding: 1rem;
        position: relative;
        background-color: #fff;
        border-radius: 0.5rem;
        cursor: pointer;
    }
    .events__filter__title {
        font-weight: 600;
    }
    .events__filter__dropdown {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        position: absolute;
        top: calc(100% + 0.5rem);
        left: 0;
        background-color: #fff;
        border-radius: 0.5rem;
        padding: 1rem;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
    }
    .events__filter.active .events__filter__dropdown {
        opacity: 1;
        pointer-events: auto;
    }

    .events__filter__dropdown__item {
        cursor: pointer;
        transition: color 0.3s;
    }
    .events__filter__dropdown__item:hover {
        color: red;
    }
    .events__filter__dropdown__item.selected {
        color: red;
    }

    .events__button.disabled {
        opacity: 0.5;
        cursor: not-allowed;
        pointer-events: none;
    }

    .events__calendar {
        background: #fff;
        border-radius: 0.5rem;
        padding: 1rem;
    }
    .events__calendar__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }
    .events__calendar__nav {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1.2rem;
        padding: 0.5rem;
    }
    .events__calendar__nav.disabled {
        opacity: 0.5;
        cursor: not-allowed;
        pointer-events: none;
    }
    .events__calendar__title {
        font-weight: 600;
    }
    .events__calendar__weekdays {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        text-align: center;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .events__calendar__days {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 0.5rem;
    }
    .events__calendar__day {
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-radius: 0.25rem;
        transition: background-color 0.3s;
    }
    .events__calendar__day:hover:not(.disabled) {
        background-color: #f0f0f0;
    }
    .events__calendar__day.disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    .events__calendar__day.has-event {
        background-color: #e6f3ff;
        font-weight: 600;
    }
    .events__calendar__day.has-event:hover {
        background-color: #cce7ff;
    }
    .events__calendar__day.selected {
        background-color: #007bff;
        color: white;
    }
</style>