# I-Rise Online Ticketing Platform

Welcome to the I-Rise Online Ticketing project! The seminar is organized by the Veritas 2024 class of St. Thomas Aquinas
Catholic Church, FUTO, and designed for students entering their 400-level internships, offering valuable tips and
insights. This project aims to facilitate the registration and management of attendees for the I-Rise seminar.

## Features

- User registration and management.
- Ticket creation and management.
- Event details including name, date, time, and location.
- Seamless communication with registered users.
- Potential for future enhancements like email confirmations, image uploads, and QR code generation.

## Requirements

To set up and run the I-Rise Online Ticketing Event project, you'll need the following:

- **PHP**: Version 7.4 or higher.
- **Composer**: Dependency manager for PHP.
- **Laravel**: The PHP framework used to build the application.
- **MySQL**: Database system.
- **Node.js and npm**: For asset compilation (optional).
- **Docker (optional)**: If you prefer to use Docker for containerization.

## Setup Instructions

### Using Docker (Recommended)

1. Clone the repository:

   ```bash
   git clone https://github.com/CodeWithKyrian/irise-online-ticketing
   ```

2. Copy the example environment file and configure it:

    ```bash
    cp .env.example .env
    ```

3. Start the Docker containers:

    ```bash
    docker compose up -d
    ```

4. Install PHP dependencies:

    ```bash
    docker compose exec app composer install
    ```

5. Generate an application key:

    ```bash
   docker-compose exec app php artisan key:generate
    ```

6. Migrate and seed the database

    ```bash
   docker-compose exec app php artisan migrate --seed
    ```

7. Your application should now be accessible at http://localhost.

### Manual Setup

For this, make sure you have php installed and a database that you can connect to running as well. Make sure you update
the `.env` file with your database connection parameters before running the migrations.

1. Clone the repository:

   ```bash
   git clone https://github.com/CodeWithKyrian/irise-online-ticketing
   ```

2. Copy the example environment file and configure it:

    ```bash
    cp .env.example .env
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Generate an application key:

    ```bash
   php artisan key:generate
    ```

5. Migrate and seed the database:

    ```bash
    php artisan migrate --seed
    ```

6. Start the development server:

    ```bash
    php artisan serve
    ```

7. Your application should now be accessible at http://localhost:8080

## Testing

To run tests for the application, use the following command:

```bash
php artisan test
```

## Contributing

We welcome contributions! If you find a bug, have a feature request, or want to contribute code, please open an issue or
pull request in this repository.
