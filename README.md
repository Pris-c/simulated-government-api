# Government API (Simulation)

This repository simulates a Government API that allows the verification of whether citizen information—**name**, **NIF** (Tax Identification Number), and **birth date**—matches data from an official governmental database. It is built using Laravel and utilizes MySQL for its database, offering a simple and secure flow for simulating this verification process.

## Features
- **HTTP Method: POST**: Simulates verification of the provided **name**, **NIF**, and **birth date** against a mock governmental database.

- **Laravel** as the backend framework.
- Migrations and seeders to populate the database with test data.

## Installation
Follow the steps below to set up the project locally:

**Clone the repository:**
```bash
git clone https://github.com/your-username/Government_API.git
```

**Install dependencies:**
```bash
composer install
```

**Configure the environment:**

Rename the `.env.example` file to `.env`:

**In the .env file, configure your database information.**


## API Documentation

### POST: /api/citizen/verify
This endpoint verifies a citizen's information in the database.

- **Method**: POST

- Responses:
    - **200 OK**: true (Information verified successfully)
    - **200 OK**: false (Citizen not found)
    - **400 Bad Request**: Incorrect data.

We use POST to ensure security when sending sensitive data in the request body.

## Usage
You can test the API with Postman or Insomnia by sending a POST request to:

`your_local_host/api/citizen/verify`.

Use the following request body:
```json
{
    "name": "Ana Costa",
    "nif": "246813579",
    "birthdate": "1992-06-05"
}
```

### Expected responses:
- **true** if the information is correct.
- **false** if not found.

## Additional Information

### Running Migrations
After installing Composer dependencies, you must run the existing migrations to create the necessary tables in the database. This ensures that the database structure is properly set up:
```bash
php artisan migrate
```

### Database Seeder
To populate the database with initial test data, you can run the database seeder. The following command will execute the seeder:
```bash
php artisan db:seed
```



### Environment Configuration
Make sure to set up your `.env` file correctly to reflect your local environment settings, especially the database connection parameters. This ensures that the application can connect to your database without issues.

## Conclusion
The Government API provides a straightforward and secure way to verify citizen information, making it an essential tool for applications that require identity verification. By following the installation and configuration steps outlined above, you can easily set up and start using the API for your projects.


## Authors ✨

🦆 **The DuckTeam**:
[Pris-c](https://github.com/Pris-c), [Arthur](https://github.com/ArthurSSR-alt), [Thais](https://github.com/thaisfreires), e [Gabriel](https://github.com/gabrielbeli).
