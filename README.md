Flexible Office Company - Laravel Project
Overview

This Laravel project is designed for a flexible office company that offers dozens of offices and meeting rooms for rent. Clients can rent these spaces to conduct business or use them as a business address. The platform provides an easy-to-use interface for managing office rentals, bookings, and client information.
Features

    Office and Meeting Room Management:

        Add, update, and delete offices and meeting rooms.

        View detailed information about each space (e.g., capacity, amenities, pricing).

    Booking System:

        Clients can book offices or meeting rooms for specific dates and times.

        Real-time availability checking.

    Client Management:

        Register and manage client accounts.

        Track client bookings and payment history.

    Business Address Service:

        Clients can use rented offices as their business address.

        Manage address usage and verification.

    Admin Dashboard:

        Comprehensive dashboard for managing all aspects of the platform.

        Generate reports on bookings, revenue, and client activity.

Installation

Follow these steps to set up the project locally:

    Clone the Repository:
    bash
    Copy

    git clone https://github.com/imadhosain/flexible-office.git
    cd flexible-office

    Install Dependencies:
    bash
    Copy

    composer install
    npm install

    Set Up Environment:

        Copy .env.example to .env:
        bash
        Copy

        cp .env.example .env

        Generate an application key:
        bash
        Copy

        php artisan key:generate

        Configure your database settings in the .env file:
        env
        Copy

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel
        DB_USERNAME=root
        DB_PASSWORD=Imad@78

    Run Migrations and Seeders:
    bash
    Copy

    php artisan migrate --seed

    Compile Assets:
    bash
    Copy

    npm run dev

    Start the Development Server:
    bash
    Copy

    php artisan serve

    Access the Application:
    Open your browser and go to http://localhost:8000.

Usage

    Admin Access:

        Log in as an admin to manage offices, meeting rooms, and client accounts.

        Use the admin dashboard to view reports and manage bookings.

    Client Access:

        Register or log in as a client to book offices or meeting rooms.

        View booking history and manage your business address.

Technologies Used

    Backend: Laravel (PHP)

    Frontend: Blade Templates, Bootstrap, JavaScript

    Database: MySQL

    Other Tools: Composer, npm, Artisan

Contributing

Contributions are welcome! If you'd like to contribute, please follow these steps:

    Fork the repository.

    Create a new branch for your feature or bugfix.

    Commit your changes.

    Submit a pull request.

License

This project is open-source and available under the MIT License.
Contact

For any questions or inquiries, please contact Imad Hosain at imad.ho@gmail.com.
