# Simple Agenda App

## Installation

> Instructions are for local environment, assuming you have PHP 7.1+ and MySQL installed

1. Download & uncompress this repo [master.zip]() (or `git clone https://github.com/fulopattila122/agenda.git`)
2. Create a database in MySQL
3. Edit `.env.example` and edit these 3 lines:
    ```bash
    # Make sure there's no space before&after the '=' sign
    DB_DATABASE=agenda
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```
4. Save the modified file as `.env`
5. Run `composer install`
6. Run `php artisan migrate`
7. Run `php artisan serve`, the site is available at http://127.0.0.1:8000
