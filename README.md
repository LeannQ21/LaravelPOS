# Laravel POS Application

## IT0049 Web System Technologies

### Technical Formative Assessments 5, 6, and 7

- **TFA5:** From Zero to Four Pages Again
- **TFA6:** From Arrays to Eloquent
- **TFA7:** Making It Editable in Laravel

**Created by:** Leann Marie S. Querubin

A Laravel Point of Sale application that evolved from static PHP arrays into a database-backed system with validated forms, edit workflows, and avatar uploads.

## Features

- Customer Accounts management
- User Accounts management
- Create and edit customer records
- Create and edit user records
- Form validation
- Validation error messages
- Preservation of old form input
- SQLite database
- Eloquent models
- Database migrations and seeders
- User avatar upload and thumbnail preparation
- Avatar display with placeholder fallback
- Navigation between pages

## Pages

- `/` - Home page
- `/about` - About page
- `/customers` - Customer Accounts page
- `/customers/create` - Create Customer form
- `/users` - User Accounts page
- `/users/create` - Create User form
- `/profile` - Profile page

## Completed Requirements

### TFA5 From Zero to Four Pages

- [x] Created a Laravel project
- [x] Created controllers and routes
- [x] Created four Blade pages
- [x] Added customer and user static arrays
- [x] Used Blade loops to display records
- [x] Added navigation links

### TFA6 From Arrays to Eloquent

- [x] Created the customers table migration
- [x] Created the users table migration
- [x] Created Customer and User models
- [x] Created CustomerSeeder and UserSeeder
- [x] Added five customer records
- [x] Added five user records
- [x] Replaced static arrays with Eloquent queries
- [x] Displayed database records in Blade views

### TFA7 Forms Validation and File Upload

- [x] Created a Create Customer form
- [x] Validated required customer fields
- [x] Validated customer email format
- [x] Created a Create User form
- [x] Validated unique usernames
- [x] Created customer edit and update forms
- [x] Created user edit and update forms
- [x] Added the avatar column to the users table
- [x] Added avatar image validation
- [x] Limited avatar uploads to 2 MB
- [x] Prepared uploaded avatars as 300x300 JPEG thumbnails
- [x] Stored avatars using Laravel public storage
- [x] Displayed avatars on the User Accounts page
- [x] Added a placeholder when no avatar is uploaded
- [x] Preserved old form input after validation errors

## Technologies Used

- Laravel 12
- PHP
- SQLite
- Blade Templates
- Eloquent ORM
- Composer
- Intervention Image

## How to Run

1. Clone or download the project.
2. Open the project folder in the terminal.
3. Install dependencies:

```bash
composer install