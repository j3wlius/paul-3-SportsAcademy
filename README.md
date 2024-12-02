# Sports Academy Management System

A comprehensive web application for managing sports academies, built with Laravel, React, and TailwindCSS.

## Features

- User Management (Athletes, Coaches, Administrators)
- Program/Class Management
- Schedule Management
- Registration System
- Performance Tracking
- Attendance Management

## Tech Stack

- **Backend:** Laravel 11
- **Frontend:** React
- **Styling:** TailwindCSS
- **Database:** MySQL
- **Authentication:** Laravel Sanctum

## Setup Instructions

1. Clone the repository
2. Install PHP dependencies: `composer install`
3. Install Node dependencies: `npm install`
4. Copy `.env.example` to `.env` and configure your database
5. Generate application key: `php artisan key:generate`
6. Run migrations: `php artisan migrate`
7. Start development servers:
   - Laravel: `php artisan serve`
   - Vite: `npm run dev`

## Development

The application will be available at:
- Frontend: http://localhost:8000
- API: http://localhost:8000/api