
Movie Recommendation System

Overview
This project is a movie recommendation system implemented with HTML, CSS, and PHP. It includes features such as user login authentication, registration, genre selection, subscription plans, and database connectivity to store user data records.

Table of Contents
1. Features
2. Installation
3. Usage
4. Database Connectivity
5. Pages
  - Login
  - Signup
  - Genre Selection
  - Subscription Plans
  - Help
  - Contact
  - Release
6. Contributing
7. Liscense 

1. Features

- User registration and authentication
- Movie genre selection
- Subscription plans for premium content
- Database connectivity for user data records
- Help and contact pages for user support

2. Installation

a. Clone the repository:

```bash
git clone https://github.com/your-username/movie-recommendation-system.git
```

b. Set up your web server (e.g., Apache) to serve the PHP pages.

c. Configure database connectivity by updating the `config.php` file with your database credentials.

d. Import the provided SQL file (`database.sql`) into your database to create the necessary tables.

3. Usage

a. Navigate to the project folder in your web browser.
b. Register for a new account or log in if you already have one.
c. Select your preferred movie genres.
d. Explore movies, subscribe to plans, and enjoy personalized recommendations.

4. Database Connectivity

The system uses PHP for database connectivity. Update the `config.php` file with your database credentials.

```php
// config.php

<?php

$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
```

5. Pages

a. Login

- Accessible at `login.php`
- Allows users to log in with their credentials.

b. Signup

- Accessible at `signup.php`
- Enables users to create a new account with registration details.

c. Genre Selection

- Accessible at `genres.php`
- Allows users to choose their preferred movie genres.


d. Help

- Accessible at `help.php`
- Provides information and assistance for users.

e. Contact

- Accessible at `contact.php`
- Allows users to contact support for assistance.

6. Contributing
Feel free to contribute by opening issues, providing suggestions, or submitting pull requests. Follow the contribution guidelines for more details.

7. License
This project is licensed under the MIT License - see the LICENSE file for details
