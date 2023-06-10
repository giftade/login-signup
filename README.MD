# LOGIN-SIGNUP

This is a PHP-based user authentication project with email and password functionality.

## Project Overview

This project aims to provide user authentication using PHP and MySQL. It includes registration, login, and logout functionalities. The user's email and password are stored securely in the database.

## Features

- User registration: Allows users to create a new account with a unique email and password.
- User login: Authenticates users by comparing their email and password with the stored credentials.
- Password hashing: Uses the `password_hash()` function to securely hash and store user passwords.
- Session management: Utilizes PHP sessions to keep track of user authentication status.
- Database integration: Stores user data, including email and hashed password, in a MySQL database.

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- Bootstrap

## Prerequisites

- PHP
- MySQL database
- Web server (e.g., Apache, Nginx)

## Installation

1. Clone the repository or download the project files.
2. Create a MySQL database and import the provided SQL schema.
3. Configure the database credentials in the `config/db.php` file.
4. Ensure that the necessary PHP extensions are enabled (e.g., PDO for database connection).
5. Set up a web server to run the PHP application.
6. Access the project in your web browser.

## Usage

1. Open the registration page and create a new user account.
2. Log in with the registered email and password.
3. Perform desired actions based on the project's functionality.
4. Log out to end the session.

## Contributing

Contributions to this project are welcome. You can submit bug reports, feature requests, or pull requests on the project's GitHub repository.

## License

This project is licensed under the [MIT License](LICENSE).
