# Personal Website with PHP Backend Testing

This is my personal website built as a playground for testing and learning PHP backend development with MySQL integration.  
It includes a simple login and registration system, connected to a database, and displays a personalized homepage after login.  
The front-end is styled with HTML and CSS, while PHP handles the authentication logic.

---

## Features
- **User Registration** — Stores name, username, email, and password in a MySQL database.
- **User Login** — Authenticates users against stored credentials.
- **Session Management** — Keeps users logged in until the browser or localhost is closed.
- **Responsive Front-end** — Custom CSS for desktop and mobile.
- **Social Links** — Quick links to GitHub, LinkedIn, and Facebook.
- **PHP + MySQL Backend** — Works locally with XAMPP or similar environments.

---



---

## Requirements
- XAMPP (PHP 8+ and MySQL)
- Web browser
- Basic understanding of PHP and MySQL

---

## Setup

1. Place the project folder inside your XAMPP `htdocs` directory.  
2. Start Apache and MySQL from the XAMPP control panel.  
3. Open `phpMyAdmin` and create a new database (e.g., `user_auth`).  
4. Create a `users` table with the following structure:

id INT AUTO_INCREMENT PRIMARY KEY

name VARCHAR(100) NOT NULL

username VARCHAR(50) NOT NULL UNIQUE

email VARCHAR(100) NOT NULL UNIQUE

password VARCHAR(255) NOT NULL

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

5. Update `db.php` with your database credentials.  
6. Access the site at `http://localhost/yourproject/`.

---

## Security Notes
- Passwords are hashed before storage using `password_hash()`.
- Database credentials are excluded from version control with `.gitignore`.
- Prepared statements are used to prevent SQL injection.

---

## Purpose
This project is **not** a production-ready system.  
It is built as a **personal practice space** to test and learn PHP backend concepts, database connections, and session handling.

---

## License
Open-source under the MIT License.

---

## Author
**Anika Tasnim**  
- [GitHub](https://github.com/ikata1819)  
- [LinkedIn](https://www.linkedin.com/in/anika-tasnim-779502332/)
