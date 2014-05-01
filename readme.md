# WEBARQ Presence

A Laravel application container based on [https://github.com/laravel/laravel/tree/v4.0.9](https://github.com/laravel/laravel/tree/v4.0.9).

## Features

* Includes Webarq\Site and Webarq\Admin packages by default.
* Default timezone is Asia/Jakarta.
* File-based environment detection.

## Installation

### Basic

1. Make sure that your SSH public key has been registered on the private repository server (128.199.208.157).
2. Make a new directory for your project: `mkdir my-project`.
3. Enter the new directory: `cd my-project`.
4. Clone Presence to current directory: `git clone git@128.199.208.157:/opt/git/webarq/presence.git .`.
5. Remove the `.git` directory: `rm -Rf .git`.
6. Install Composer dependencies: `composer install`.

Done. Now you can access your application at, for example, `http://localhost/my-project/`.

### Setup Database

1. Create a new MySQL database.
2. Setup Laravel's database connection in `/app/config/database.php`.
3. Import Webarq\Site's schema. The file is located in `/vendor/webarq/site/schema.sql`.
4. Import Webarq\Admin's schema. The file is located in `/vendor/webarq/admin/schema.sql`. 

### Setup The Admin Panel (Webarq\Admin)

1. Publish Admin's assets: `php artisan asset:publish webarq/admin`.
2. Publish Admin's configurations: `php artisan config:publish webarq/admin`.

Now you can access the admin panel at, for example: `http://localhost/my-project/admin-cp/`. Default user: `admin`, default password: `webarq`.

### File-Based Environment Detection

*Please note that you don't need to do this for production environment.*

1. Under `/app/config/` directory, create a new PHP file named `[your-computer-name].env.php`.
2. Add a line telling the environment name. For example: `<?php return 'local';` for **local** environment.
3. Save the file and you're ready to go.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)