# Laravel Project

## 📌 Project Overview
This project is a Laravel-based web application that integrates a provided HTML template into a Laravel Blade file. It includes user authentication, role-based dashboards, middleware for access control, and an unauthorized page.

## 🚀 Features
- ✅ **Template Integration**: Converted HTML template into Laravel Blade.
- ✅ **Authentication System**: User registration, login, and logout.
- ✅ **Role-Based Dashboards**:  
  - **Admin Dashboard**: `/dashboard/admin` (only accessible by admins).  
  - **User Dashboard**: `/dashboard/user` (for users).  
- ✅ **Middleware Protection**: Restricts access based on user roles.
- ✅ **Unauthorized Page**: Displays an error message for unauthorized access.
- ✅ **Laravel Mix**: Compiles assets for optimized performance.

## 🛠️ Installation Steps

### 1️⃣ Clone the Repository
```sh
    git clone https://github.com/Msallem-Yamina/laravel-authentication
    cd laravel-authentication

2️⃣ Install Dependencies

    npm install

3️⃣ Configure Environment

Copy the .env.example file and update database credentials:

    cp .env.example .env
Then, edit the .env file:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password

4️⃣ Generate Application Key
    php artisan key:generate

5️⃣ Run Database Migrations
    
    php artisan migrate

7️⃣ Start Laravel Server

    php artisan serve

Visit http://127.0.0.1:8000 in your browser.

