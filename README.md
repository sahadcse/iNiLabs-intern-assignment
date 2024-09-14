# PHP Assignment - OOP Concepts and Laravel To-Do CRUD Module

This repository contains solutions to various tasks demonstrating Object-Oriented Programming (OOP) concepts such as **Class Inheritance**, **Interface Implementation**, **Encapsulation**, and a **To-Do CRUD Module** built with the Laravel framework.

## Task 1: Class Inheritance

In this task, we demonstrate **class inheritance** by creating classes to represent geometric shapes, including **circles** and **rectangles**. These classes include methods to calculate the **area** of each shape.

### Features
- A base `Shape` class that other shapes extend.
- `Circle` class with an area calculation method based on the radius.
- `Rectangle` class with an area calculation method based on length and width.

## Task 2: Interface Implementation

This task involves creating a **logging system** using **interfaces**. The system demonstrates how multiple classes can implement the same interface and how it can enforce certain behaviors across those classes.

### Features
- A `LoggerInterface` that defines logging methods.
- Classes `FileLogger` and `DatabaseLogger` that implement the interface to log messages to a file or a database.


## Task 3: Encapsulation

In this task, we focus on **encapsulation** by designing a class to manage employee data, ensuring that sensitive information, like an employee’s salary, is handled securely through **getter** and **setter** methods.

### Features
- `Employee` class with private properties for `name` and `salary`.
- Methods to securely get and set the employee's salary.
- 

## Task 4: To-Do Module (Mandatory)

This task involves creating a **To-Do CRUD Module** using the **Laravel framework**. This module allows users to create, read, update, and delete to-do items.

### Features
- To-Do CRUD operations using Laravel.
- Frontend view rendering with Blade.
- Responsive design using Bootstrap.

### CRUD Operations

- **Create a To-Do:** Navigate to `/todos/create` to add a new to-do.
- **Edit a To-Do:** Use the **Edit** button next to each to-do item to update it.
- **Delete a To-Do:** Use the **Delete** button next to each to-do item to remove it.
- **List All To-Dos:** Navigate to `/todos` to see all created to-dos.

## Technologies Used

- **PHP 8** for OOP-based tasks.
- **Laravel** for building the To-Do CRUD application.
- **Blade** for frontend rendering.
- **Bootstrap 5** for styling.
- 

### Key Points:
1. **Task 1: Class Inheritance** showcases PHP inheritance using shape classes.
2. **Task 2: Interface Implementation** demonstrates how to use interfaces in PHP.
3. **Task 3: Encapsulation** provides an example of encapsulating sensitive data.
4. **Task 4: To-Do Module** explains how to set up and run a Laravel CRUD app, with the option to use **Blade** for rendering.
