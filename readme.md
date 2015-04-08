# Laravel 5 Boilerplate with Skeleton framework

Skeleton (as of now) Laravel 5 framework application.

Application includes and/or are currently being used on this project:

* [Laravel 5 Framework](http://laravel.com/docs)  - PHP Framework
* [Skeleton](http://getskeleton.com) - Responsive CSS Framework
* [Gulp](http://gulpjs.com) - To minify and concatenate JS and LESS files into CSS
* [Laravel Elixir](http://laravel.com/docs/5.0/elixir) - Laravel API for defining Gulp task
* [Sidr](http://www.berriart.com/sidr/) - Responsive navigation menu
* [Fontastic](http://fontastic.me/) - Vector Icon collection - 845 Icons

-----------

## Getting started

This project assumes you have Laravel Homestead as your development environment learned more [here](http://laravel.com/docs/5.0/homestead)

Once you clone the repro into your Homestead environment and set it up as a new site, you will need to run `composer install` command from your project root.

After that you will need to run `npm install` to be able to run gulp commands.

Once that is complete you can either run the following Gulp commands:

`gulp`: This will run any commands that are in the `gulpfile.js` file in the root of your project. Notice that the `gulpfile.js` is looking at the `resources` folder and will output the commands into the `public` folders.

`gulp watch`: Will watch the project for any files that have changed and automatically rerun the `gulp` command.

`gulp --production` or `gulp watch --production`: This will run the same commands but will minify the CSS and JS files.

Currently the gulp commands only compile LESS files located in `resources/assets/less` into 1 CSS file `style.css` located in `public/css` and compiles all JS files located in `resources/js` to 1 JS file `all.js` located `public/all.js`

### Database stuff

Navigate to the `.env` (if you don't see it on the root of your project copy the content of .env.example and create a .env file) file in the root of your project and input your database credentials. Everything should be as is except the database name (if you're using Homestead).

Next thing to do is run the `artisan` command: `php artisan migrate`. This will create the following tables in your database.

* users
* password_resets
* migrations

After running the `migrate` command go to `database/seeds/DatabaseSeeder.php`

You will see a place that has the admin credentials in place. Please change to whatever you want it to be. We also supply you with a "standard" user. This user does not have super_user permission and will not be able to access the same pages as the admin does.

Then run `php artisan db:seed` to apply the changes to the database.

Once the changed have been applied you can navigate to `projectname.app:8000/login` to enter your credentials. If you logged in with a standard user account you will be presented with a basic dashboard that replicates the flow and layout of the website. This dashboard is meant to supply the standard user with information that only pertains to them. For example order information if this was an e-commerce application. If you logged in with the administrator account you will be presented with the same exact looking website except it has a custom `full-container` style that will expand the size of the screen to optimize workflow and better placement of tables that may be useful to display admin information (Maybe display all users on the site or newest orders)

Admin features only a few easy to use User pages. These pages allow the admin to edit, create and delete users. This makes it easy to manage users that may have created accounts with your website.

Standard user accounts only can edit their account. They will not have the ability to view or delete other accounts.

#### Front-end styling

Documentation is available in `project.app:8000/docs




