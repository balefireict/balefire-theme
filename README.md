# Balefire WordPress Theme

Balefire is an open-source WordPress theme built for [your project name]. It utilizes Node.js for development and provides a set of npm scripts for building, syncing, and managing CSS and JavaScript files.

## Installation

To get started with Balefire, follow these steps:

1. Clone the repository: `git clone [repository URL]`
2. Navigate to the theme directory: `cd balefire`
3. Install the required dependencies: `npm install`

## Development

During development, you can use the following npm scripts:

* `npm run build`: Builds the CSS and JavaScript files for production. The minified files will be generated in the `/dist` directory.
* `npm run sync`: Starts a local development server and automatically syncs changes made to the `/src` directory.
* Open package.json and update --proxy url to match your local development URL.
* Update wp-config to define your wp_env as development: define('WP_ENV', 'development'); is what you need to add to your wp-config.php file.
// for dev
define('WP_ENV', 'development'); 
// for production
// define('WP_ENV', 'production'); 

## Contributing

Contributions are welcome! If you'd like to contribute to Balefire, please follow these guidelines:

1. Fork the repository and create a new branch for your feature or bug fix.
2. Make your changes and ensure that the code passes all tests.
3. Submit a pull request with a clear description of your changes.

## License

Balefire is released under the [MIT License](LICENSE).
