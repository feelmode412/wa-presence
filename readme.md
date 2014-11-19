# WEBARQ Presence

A web application boilerplate based on [Laravel 4.2.11](https://github.com/laravel/laravel/tree/v4.2.11).

## Features

* Includes Webarq\Site and Webarq\Admin packages by default.
* Default timezone is Asia/Jakarta.
* File-based environment detection.
* Site::registerControllerRoutes() in `/app/routes.php`.
* Includes a basic master layout contains Javascript helpers from Site package.

## Installation

### Basic

1. Download a compressed version of Presence.
2. Extract it to a directory you wish.
3. Install Composer dependencies:

		composer install

It is not done yet, but now you can access your application's frontend at, for example, `http://localhost/my-project/`.

### Setup Database

1. Create a new MySQL database.
2. Setup Laravel's database connection in `/app/config/database.php`.
3. Import Webarq\Site's schema. The file is located in `/vendor/webarq/site/schema.sql`.
4. Import Webarq\Admin's schema. The file is located in `/vendor/webarq/admin/schema.sql`.

Done. Now you can access the admin panel at, for example: `http://localhost/my-project/admin-cp/`. Default user: `admin`, default password: `webarq`.

## Development

### File-Based Environment Detection

*Please note that you don't need to do this for **production** environment.*

1. Under `/app/config/` directory, create a new PHP file named `[your-computer-name].env.php`.
2. Add a line telling the environment name. For example:

		<?php return 'local';
3. Save the file and you're ready to go.

### Update Admin Panel's Assets and Configs

You may need to regularly update the admin panel's assets and configurations when there are updates from WEBARQ\Admin package. 

1. Publish Admin's assets:

		php artisan asset:publish webarq/admin
2. Publish Admin's configurations:

		php artisan config:publish webarq/admin

## Copyright

WEBARQ Presence &copy; 2014 [WEBARQ](http://www.webarq.com/). All rights reserved.