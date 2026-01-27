# BJJ Club Management System

Web application built with Laravel for managing a Brazilian Jiu-Jitsu club.  
The system provides role-based access for club owners, coaches, and members, allowing efficient management of users, schedules, and club content.

This project was created as a portfolio application to demonstrate practical backend development skills using Laravel.

---

## Features

### Authentication & Authorization
- User registration and login
- Password reset
- Role-based access control (Owner / Coach / Member)
- Middleware-protected routes

### Admin / Owner Panel
- Manage users and roles
- Activate / deactivate members
- Manage club content
- View member list and basic statistics

### Member Area
- Access personal profile
- View class schedule
- See membership status

### General
- Clean dashboard UI
- Form validation
- Secure access to data
- Structured database relationships

---

## Tech Stack

- **Backend:** Laravel
- **Frontend:** Blade, Tailwind CSS
- **Database:** MySQL
- **Auth:** Laravel Breeze / Jetstream
- **Other:** Eloquent ORM, Migrations, Seeders

---

## Project Goal

The goal of this project is to build a realistic web application that reflects real-world business requirements rather than a simple CRUD demo.

The system is designed around an actual use case (martial arts club management) and focuses on:
- clean architecture
- clear separation of roles
- maintainable backend logic

---

## Possible Future Improvements

- Multi-club support (multi-tenant architecture)
- Membership payments and subscriptions
- Attendance tracking
- Email notifications
- API for mobile app integration

---

## Installation

1. Clone the repository  
   ```bash
   git clone https://github.com/your-username/your-repo-name.git