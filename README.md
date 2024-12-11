# Coyote Den Hostel PHP

This is a Laravel-based web application for managing a hostel's services, rooms, and bookings.

## Requirements

- PHP 8.2 or higher
- Composer
- XAMPP (for local development)

## Installation

### Step 1: Clone the Repository

```bash
- git clone https://github.com/your-username/coyote-den-hostel-php.git
- cd coyote-den-hostel-php

- composer install
- DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coyote_den_hostel_php
DB_USERNAME=root
DB_PASSWORD=

- php artisan migrate
- php artisan db:seed
- php artisan serve
