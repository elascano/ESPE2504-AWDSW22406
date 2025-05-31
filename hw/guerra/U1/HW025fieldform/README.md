# ESPE2504-AWDSW22406 - Homework

This repository contains the homework and assignments completed during the **Advanced Web Development** course at **ESPE** University. Here you will find assignment 2 of Unit 1.

## Description

Complete Assignment 2 of Unit 1 of the course.
Activity: Create a 5-field HTML form, at least 2 of which must be of a type other than string (date, email, numeric, etc.). Implement styles on the HTML page. Additionally, you must generate a MySQL database with MariaDB and implement this database with PHP to submit and insert data into the form.

## Tasks Completed

- **HW_02_5fieldform**: Creating an HTML form with 5 input fields and implementation with PHP.

## Instructions for Execution

1. Clone this repository to your local machine:
    ```bash
    git clone https://github.com/elascano/ESPE2504-AWDSW22406.git
    ```
   
2. Open the files in your preferred code editor (e.g., Visual Studio Code).

3. Make sure you have Xampp installed.

4. Open Xampp and start Apache and MySQL.

5. Click on the admin button on MySQL

6. Create the database with the name "tech_store", add the table "products" and add 6 columns, the type of data is described below:

    CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    name VARCHAR(100) NOT NULL,         
    description TEXT NOT NULL,          
    category VARCHAR(100) NOT NULL,     
    price DECIMAL(10, 2) NOT NULL,      
    stock INT(11) NOT NULL              
    );

    save the table.

7. Copy the folder of the project to the following directory: "C:\xampp\htdocs"

8. Type in you browser the direction of the proyect: "http://localhost/HW_02_5fieldform/index.html"

## Requirements

- **PHP**: To run PHP scripts on a local server.
- **Code Editor**: You can use Visual Studio Code, Sublime Text, or any editor you prefer.
- **Web Browser**: To view HTML forms.
- **XAMPP**: To create a local web server.

## Author

Diana Carolina Guerra Coronel 
Student at the University of the Armed Forces **ESPE**, id:**L00423713**, subject: **Advanced Web Development 22406**.

