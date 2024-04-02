# Gym Management Website

The Gym Management Website is designed to streamline the operations of a fitness center. It provides a platform for managing members, scheduling classes for the admin and offers the possibility to the clients to create accounts, pay offers and more.

## Features

### Admin Dashboard

- Login
- Manage members (add, remove, update)
- Manage offers (add, remove)
- Upload plannings
- Sign out

### Client Interface

- Explore the website: services, coaches, schedules
- Create an account (sign up)
- Login
- Enroll in an offer and pay it
- Download his access card (only if he's already enrolled in an offer)
- Visit his profile (update his data)
- Sign out

## Usage

Upon accessing the website, users will be directed to the appropriate interface based on their role (admin or client). Administrators will have access to the dashboard for managing all aspects of the gym, while members can view their details, schedules, and make payments.

## Testing

### Payment

- Install composer and stripe: [https://getcomposer.org/download/](https://getcomposer.org/download/)
- After installing composer you should run this command in your project directory: `composer require stripe/stripe-php`
- When testing the payment procedure you should use this number for the card information: 4242 4242 4242 4242

### Admin Interface

To access to the admin account use this:

- Username: admin
- Password: admin

### Database

- Open phpmyadmin
- Run the script "script.sql" in the server

**Note:** To use Stripe test without problems you should name the folder of the project "project", otherwise you should go to the `payment.php` file and replace in the line 19 'PROJECT' by the name of your folder.
