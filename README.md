<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📚 BookStore_Laravel

**BookStore_Laravel** is a simple book browsing and ordering web application built with the **Laravel PHP framework**. This app was created during my learning journey with PHP and Laravel. It allows users to browse books and place orders, while managers can review and complete those orders.

---

## 🚀 Features

- Browse all available books  
- View details of individual books  
- Users can place orders for books  
- Managers have access to view all orders, inspect individual orders, and mark orders as completed  
- Basic authentication middleware protects order management routes  
- User registration is disabled (registration is not available)

---

## 🛠 Technology Stack

| Component        | Technology          |
|------------------|---------------------|
| Backend          | Laravel PHP         |
| Templating       | Blade Templates     |
| Frontend         | JavaScript          |
| Database         | MySQL               |

---

## 🔗 Routes Overview

| Method | URI               | Description                       | Middleware   |
|--------|-------------------|---------------------------------|--------------|
| GET    | `/`               | List all books                   | Public       |
| GET    | `/books/{book}`   | Show details for a specific book | Public       |
| GET    | `/create-order`   | Show order creation form          | Public       |
| POST   | `/create-order`   | Submit a new order                | Public       |
| GET    | `/orders`         | View all orders (manager)         | Authenticated|
| GET    | `/orders/{id}`    | View details of a single order    | Authenticated|
| DELETE | `/orders/{id}`    | Delete an order                   | Authenticated|

---

## ⚙️ Setup & Run

1. Clone the repository:  
   ```bash
   git clone https://github.com/assaad-assaad/BookStore_Laravel.git
   cd BookStore_Laravel

