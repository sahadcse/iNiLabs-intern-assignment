# Laravel To-Do Application

A simple To-Do CRUD (Create, Read, Update, Delete) application built with the **Laravel** framework. This app allows users to manage their tasks by adding, editing, and deleting to-do items. The app uses Blade for view rendering and Bootstrap for styling.

## Features

- Add new to-do items
- Edit existing to-do items
- Delete to-do items
- Responsive design using Bootstrap

## Prerequisites

- PHP >= 8.0
- Composer
- Node.js & NPM
- MySQL or any other supported database
- Git

 Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/sahadcse/iNiLabs-intern-assignment
    ```

2. **Navigate to the project directory:**

    ```bash
    cd todo-app
    ```

3. **Install the dependencies:**

    - Install PHP dependencies with Composer:
    
      ```bash
      composer install
      ```

    - Install JavaScript dependencies with NPM:
    
      ```bash
      npm install
      ```

4. **Configure your environment:**

    - Copy the `.env.example` file to `.env`:

      ```bash
      cp .env.example .env
      ```

    - Open `.env` and set your database credentials:

      ```bash
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=your_database_name
      DB_USERNAME=your_username
      DB_PASSWORD=your_password
      ```

5. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run migrations:**

    ```bash
    php artisan migrate
    ```

7. **Run the application:**

    - Compile assets with Vite (if applicable):
    
      ```bash
      npm run dev
      ```

    - Serve the application:
    
      ```bash
      php artisan serve
      ```

    The application will be available at `http://localhost:8000`.

## Usage

- Go to `/todos` to view, add, edit, and delete to-do items.
- To add a new to-do item, click the "Add To-Do" button.
- You can edit or delete an existing to-do item from the list.

## Technologies Used

- **Laravel**: PHP framework for building web applications.
- **Blade**: Templating engine for rendering views.
- **Bootstrap**: CSS framework for responsive design.
- **MySQL**: Database for storing to-do items.
- **Vite**: Frontend build tool.
