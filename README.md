<p align="center"><a href="https://bluepundit.eu" target="_blank"><img src="https://bluepundit.eu/img/bluepundit-logo-pundit.png?1" width="100"></a></p>

# boniato project
Example project for the BCN MWA 1 class of 2025-26

## Authors
- [bluePundit](https://bluepundit.eu) - Nico Deblauwe ([@ndeblauw](https://www.github.com/ndeblauw))

## Requirements
This project uses
- [Laravel 12](https://laravel.com/docs/12.x/releases), it was built on top of the [ndeblauw/starterpackage](https://github.com/ndeblauw/starterpack) 
- Replaced vite and related front-end dependencies by CDN includes of **Tailwind CSS** and **Alpine JS** to keep things simple

## Environment Variables
Nothing but the standard ones, everything is mentioned in the `.env.example` file

## Dev Installation instructions
- Create a directory for the project and cd into it
- Clone the project into this directory (`git clone https://github.com/ndeblauw/boniato.git  .`)
- run `composer install`
- Create a `.env` for your dev environment: `cp .env.example .env` and adjust the settings (local domain, database, etc) if needed
- Set the encryption key in the .env: `php artisan key:generate`
- when using sqlite: do execute `touch database/database.sqlite` to create the database
- next migrate the tables: `php artisan migrate`
- and then seed date: `php artisan db:seed`.

Seeding includes two default users: `admin@admin.com` and `user@user.com`, both with `password` as password.
