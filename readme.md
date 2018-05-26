# Simple Agenda App

## Installation

> Instructions are for local environment, assuming you have PHP 7.1+ and MySQL installed

1. Download & uncompress this repo [master.zip](https://github.com/fulopattila122/agenda/archive/master.zip) (or `git clone https://github.com/fulopattila122/agenda.git`)
2. Create a database in MySQL
3. Edit `.env.example` and change these 3 lines according to your settings:
    ```bash
    # Make sure there's no space before&after the '=' sign
    DB_DATABASE=agenda
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```
4. Save the modified file as `.env`
5. Run `composer install`
6. Either run `php artisan migrate` or use the `schema.sql`
7. Run `php artisan serve`, the site is available at http://127.0.0.1:8000
