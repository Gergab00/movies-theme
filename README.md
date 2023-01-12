# Movies Theme
A simple and elegant WordPress theme perfect for movie enthusiasts and bloggers.

## Features
- Fully responsive design
- Customizable homepage with featured movies and latest reviews
- Built-in movie review functionality
- Easy integration with the TMDB API for movie information and poster images
- Customizable color scheme
- Compatible with the latest version of WordPress
- Translation ready

## Installation
1. Download the theme files from GitHub or WordPress repository
2. Go to Appearance > Themes in your WordPress dashboard
3. Click on the Add New button
4. Click on the Upload Theme button
5. Click on the Choose File button and select the theme zip file
6. Click on the Install Now button
7. Once the installation is complete, click on the Activate link

## Setup
1. Go to Appearance > Customize in your WordPress dashboard
2. Select the Movies Theme options
3. Set up your homepage with featured movies and latest reviews
4. Configure the TMDB API settings to display movie information and poster images
5. Customize the color scheme and other options
6. To start using all the tools that come with `Movies Theme`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```
## Usage
1. Create a new movie review by going to Posts > Add New in your WordPress dashboard
2. Select the movie review post format
3. Enter the movie title and information
4. Enter your review and rating
5. Publish your review

## Support
If you encounter any issues or need assistance, please open an issue on the [GitHub repository](https://github.com/Gergab00/movie-plugin) or contact us via our [mail](contact@gerardo-gonzalez.dev).

## Contribution
We welcome any contributions to the plugin, please fork the repository and submit a pull request with your changes.

### Requirements

`Movie Theme` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Available CLI commands

`Movies Theme` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run copy-assets` : this script is responsible for copying the resources or assets necessary for the project from the "src/build" folder to the main folder of the project.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

## License
This plugin is licensed under the GPLv2 license.

## Changelog
- 1.0.0 - Initial release

## Author
[Gerardo Gabriel Gonzalez Velazquez](https://gerardo-gonzalez.dev)

## Disclaimer
The Movies Theme is not affiliated with or endorsed by the TMDB API. The TMDB API is a trademark of The Movie Database, LLC.