# ☁️ Cloud Cafe - TFA8 (POS & Account Management System)

A point-of-sale (POS) and staff account management notebook built with **Laravel**, featuring secure authentication, resource controllers, protected routes, and a hand-drawn notebook-themed UI.

---

##  Features

* ** Laravel Breeze Authentication:** Secure login, registration, and user session management.
* ** Access Control & Auth Middleware:** Management pages (`/customers`, `/users`, `/account`) are fully protected; guests are automatically redirected to the login page.
* ** Resource Routing:** Refactored customer and user account routes into clean single resource routes (`Route::resource`) with standard 7 resource methods.
* **Notebook-Themed UI:** Custom styling featuring lined notebook paper, a red margin line, spiral binding holes, hand-drawn typography (`Caveat` and `Patrick Hand` fonts), and sticky-note alert boxes.
* ** Customer & User Management:** Full CRUD capabilities for tracking cafe customers and staff accounts with profile pictures and form validations.

---

##  Built With

* **Backend:** PHP, Laravel Framework
* **Database:** MySQL (XAMPP / phpMyAdmin)
* **Authentication:** Laravel Breeze
* **Frontend:** Blade Templates, Custom CSS, Google Fonts

---

## Application Routes

| Method | URI | Description | Access |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | Redirects to customers index / dashboard | Public / Auth |
| `GET` | `/about` | About page detailing the system | Public |
| `GET` | `/login` | User login screen | Public |
| `GET` | `/customers` | List all customer records | Protected (Auth) |
| `RESOURCE` | `/customers` | Customer CRUD routes (create, store, edit, update, destroy) | Protected (Auth) |
| `RESOURCE` | `/users` | User account CRUD routes | Protected (Auth) |
| `GET` | `/account` | Currently logged-in user profile view | Protected (Auth) |

---

## Local Installation & Setup

Kung na-clone mo ang repository na ito, sundin ang mga hakbang na ito para mapagana ito sa iyong local machine:

1. **Clone ang Repository:**
   ```bash
   git clone [https://github.com/jxninxtorre/TFA8.git](https://github.com/jxninxtorre/TFA8.git)
   cd TFA8
