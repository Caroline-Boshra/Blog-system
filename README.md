#  Native PHP Blog Management System

A robust and secure full-stack Blog Management System built completely from scratch using **Native PHP** and **MySQL**. This project demonstrates a strong understanding of backend development, database architecture, authentication, and secure file handling without relying on frameworks.

##  Features

- ** User Authentication System:**
  - Secure Registration and Login.
  - Password hashing and validation using native PHP security standards.
  - Session-based user tracking.
  
- ** Blog Post Management (CRUD):**
  - **Create:** Authenticated users can write new blog posts and upload images.
  - **Read:** Displaying posts dynamically from the database.
  - **Update:** Users can edit titles, content, and conditionally replace images.
  - **Delete:** Secure deletion of posts along with their associated image files from the server.

- ** Security & Validation:**
  - Strict input validation to prevent empty submissions.
  - XSS Protection (`htmlspecialchars`, `htmlentities`).
  - Secure File Upload handling (Real image content verification using `getimagesize()`, not just extension checking).
  - Validation routing to prevent unauthorized access.

- ** Architecture:**
  - Structured following the MVC pattern concepts (separated Views, Controllers, and Core Functions).
  - Centralized Database configuration and dynamic routing system (`index.php?page=...`).

## Tech Stack

- **Backend:** Native PHP (Procedural / Core concepts).
- **Database:** MySQL.
- **Frontend:** HTML, CSS, Bootstrap (for a clean and responsive UI).
- **Environment:** Localhost via Laragon (Apache, MySQL).

##  Project Structure

 Blog_System/
├──  assets/          # CSS, JS, and uploaded images
├──  config/          # Database connection files
├──  controller/      # Logic controllers (Auth, Blog,contact_us)
├──  core/            # Helper functions and Validations
├──  views/           # UI templates (Header, Footer, Pages)
└── 📄 index.php      # Main entry point (Dynamic Routing)
