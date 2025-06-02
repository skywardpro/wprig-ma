# Bulma Barebone v0.1 [In development]

A streamlined version of the Bulma framework with additional CSS utilities.

Based on: bulma.io v0.9.4 | MIT License | https://github.com/jgthms/bulma 

## Features

- **Cleaned Bulma framework**: Retains only the most commonly used classes.
- **Commonly used CSS properties**: Additional CSS classes included in **'sass/common-properties'** to easily adjust your design directly in the markup, with full responsiveness.

## Project Structure

```
bulma-barebone/
├── sass/
│   ├── common-properties/  # Additional utility classes
│   ├── utilities/         # Core utility functions
│   ├── layout/           # Layout components
│   ├── helpers/          # Helper classes
│   ├── grid/             # Grid system
│   └── elements/         # Basic elements
├── bulma-barebone.sass   # Main SASS file
└── _bulma-barebone.css   # Compiled CSS output
```

## Getting Started

### Prerequisites

1. Install Node.js and npm from [nodejs.org](https://nodejs.org/)
2. Install SASS globally:
```bash
npm install -g sass
```

### Installation

1. Clone this repository:
```bash
git clone https://github.com/skywardpro/bulma-barebone.git
cd bulma-barebone
```

2. Install dependencies (if any):
```bash
npm install
```

### Building the SASS

1. To compile SASS to CSS:
```bash
sass bulma-barebone.sass _bulma-barebone.css
```

2. For development with watch mode (auto-compile on changes):
```bash
sass --watch bulma-barebone.sass _bulma-barebone.css
```

3. For production build (minified):
```bash
sass bulma-barebone.sass _bulma-barebone.css --style compressed
```

## Customization

1. Modify the SASS files in the `sass/` directory to customize styles
2. Main entry point is `bulma-barebone.sass`
3. Add your custom variables in `sass/utilities/_variables.sass`
4. Add new components in their respective directories under `sass/`
5. Rebuild using the commands above

## Contributing

Contributions are welcome! Please open an issue to discuss your ideas or submit a pull request.

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.