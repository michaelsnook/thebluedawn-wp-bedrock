# The Blue Dawn Wordpress Site

A wordpress site and theme built on Roots.io's Bedrock and Sage. 


## Requirements

* PHP >= 7.1
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
* MySQL or MariaDB

## Installation

(Most of the instructions below are left over from Bedrock's readme.)

1. Clone this repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and update environment variables:
  * Database variables
    * `DB_NAME` - Database name
    * `DB_USER` - Database user
    * `DB_PASSWORD` - Database password
    * `DB_HOST` - Database host
    * Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (https://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
    * Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
    * Generate with [our WordPress salts generator](https://roots.io/salts.html)
4. Add theme(s) in `web/app/themes/` as you would for a normal WordPress site
5. Set the document root on your webserver to Bedrock's `web` folder: `/path/to/site/web/`
  * For local development, you can cd into the `web` folder and use the built-in PHP development server: `php -S localhost:8000`
  * And then if you're working on front-end things you may want to cd into the theme directory (`app/themes/thebluedawn`) and run the Yarn development server with `yarn start`
6. Access WordPress admin at `https://example.com/wp/wp-admin/`

## Post-install Setup
1. Create 4 pages, for Seek Counseling, Counselors Network, Sponsor Sessions, Volunteer. Embed Google Forms on those pages.
1. Go to `Appearance > Menus` and create the primary menu. Populate it with: Blog, Seek Counseling, Counselors Network, Sponsor Sessions, Volunteer.
1. Create another menu, the Social Media Menu, with links to Facebook, Twitter, Instagram, Medium, other properties.
1. Create a footer in `Appearance > Widgets`, like this: 
  <img src="./docs/wp-widget-footer-setup-admin.png" style="max-width: 600px;">
  It should look like this: 
  <img src="./docs/wp-widget-footer-setup-result.png" style="max-width: 600px;">

## Direction

1. Trying to largely copy the flow and organisation of this website http://www.savelifeindia.org/ and this one http://www.bloodconnect.org/ 
