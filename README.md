# Laravel POS Application

## IT0049 Web System Technologies

### Technical Formative Assessments 5 and 6

**TFA5:** From Zero to Four Pages Again  
**TFA6:** From Arrays to Eloquent

**Created by:** Leann Marie S. Querubin

A Laravel Point of Sale application that began with static PHP arrays in TFA5 and was upgraded to use SQLite, migrations, seeders, and Eloquent models in TFA6.

## Features

- Home page
- About page
- Customer Accounts page
- User Accounts page
- Navigation between pages
- Customer and user database records
- SQLite database
- Eloquent models
- Database migrations and seeders

## Pages

- `/` - Home page
- `/about` - About page
- `/customers` - Customer Accounts page
- `/users` - User Accounts page

## Completed Requirements

### TFA5 From Zero to Four Pages

- [x] Created a Laravel project
- [x] Created PageController
- [x] Created CustomerController
- [x] Created UserController
- [x] Added routes for all four pages
- [x] Created Home and About pages
- [x] Created Customer Accounts and User Accounts pages
- [x] Added five customer records using static PHP arrays
- [x] Added five user records using static PHP arrays
- [x] Used Blade `@foreach` loops
- [x] Added navigation links

### TFA6 From Arrays to Eloquent

- [x] Created the customers table migration
- [x] Created the users table migration
- [x] Added customer fields: `full_name`, `email`, and `phone`
- [x] Added user fields: unique `username` and `full_name`
- [x] Created the Customer Eloquent model
- [x] Created the User Eloquent model
- [x] Created CustomerSeeder
- [x] Created UserSeeder
- [x] Added five customer database records
- [x] Added five user database records
- [x] Updated the controllers to retrieve records using Eloquent
- [x] Displayed database records in Blade views
- [x] Tested all required pages

## Technologies Used

- Laravel 12
- PHP
- SQLite
- Blade Templates
- Eloquent ORM
- Composer

## How to Run

1. Clone or download the project.
2. Open the project folder in the terminal.
3. Install dependencies:

```bash
composer install