## API-CALL

## Project Description:
API-CALL is a RESTful API project built using Laravel for managing student records. It allows users to perform basic CRUD operations such as creating, reading, updating, and deleting student information through API endpoints.

This project was created to demonstrate Laravel API development and database integration using MySQL.

## Features
    - Retrieve all student records
    - Retrieve a student by ID
    - Add a new student
    - Update student details
    - Partially update student information
    - Delete a student record
    - Delete all student records

## Setup Instructions:
## Requirements
## Before running the project, make sure the following are installed:
    - PHP 8+
    - Composer
    - MySQL
    - Laravel
    - Postman (optional for testing API endpoints)

Installation
1. Clone the repository
    git clone https://github.com/your-username/api-call.git
2. Navigate to the project directory
    cd api-call
3. Install dependencies
    composer install
4. Copy the environment file
    cp .env.example .env
5. Generate the application key
    php artisan key:generate
6. Configure database connection
    Open .env and update:
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
7. Run migrations
    php artisan migrate
8. Start the development server
    php artisan serve
    The application will run at:
    http://127.0.0.1:8000

## Screen Recording Demonstration
Google Drive Link: https://drive.google.com/file/d/18UfAElJuXuz8tbQrorNsgbvIK_yIQ1Q5/view?usp=drivesdk