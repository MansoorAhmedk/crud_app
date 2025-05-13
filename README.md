# CRUD App - Student Management System

A simple CRUD (Create, Read, Update, Delete) web application built using **PHP** and **MySQL** to manage student records.

## ✨ Features

- **Add Student**: Enter student's name and email through a form and add to the database.
- **View Students**: List of all students displayed below the form in a tabular format.
- **Edit Student**: Update name and email of any existing student using the "Edit" button.
- **Delete Student**: Remove a student from the list with a single click on the "Delete" button.
- **Simple UI**: Clean and user-friendly interface for smooth interaction.

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## 📋 Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/MansoorAhmedK/crud_app.git
   cd crud_app
   ```

2. **Import the SQL file**
   - Create a database named `crud_app` (or your preferred name) in **phpMyAdmin** or using MySQL CLI.
   - Import the provided `students.sql` file (if available), or manually create the table:
     ```sql
     CREATE TABLE students (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL
     );
     ```

3. **Configure database connection**
   - Open `config.php` (or wherever DB credentials are set).
   - Update the following variables if needed:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'crud_app';
     ```

4. **Run the application**
   - Place the project in your local server directory (e.g., `htdocs` for XAMPP).
   - Open your browser and go to:
     ```
     http://localhost/crud_app/
     ```

## 📷 UI Overview

- A form with:
  - **Name** input field
  - **Email** input field
  - **Add Student** button

- A student table below the form:
  - Each row shows a student's **name** and **email**
  - Each row has **Edit** and **Delete** buttons to modify or remove data.

## 📁 File Structure

```
crud_app/
│
├── index.php         # Main UI and form logic
├── config.php        # Database connection
├── add.php           # Handles adding new students
├── edit.php          # Handles editing student data
├── delete.php        # Handles deleting students
└── style.css         # (Optional) Styling for the app
```

## 👨‍💻 Author

[![Mansoor Ahmed K](https://github.com/MansoorAhmedK.png?size=100)](https://github.com/MansoorAhmedK)  
**Mansoor Ahmed K**  
🔗 [GitHub Profile](https://github.com/MansoorAhmedK)

---

