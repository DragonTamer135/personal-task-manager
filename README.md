# Personal Task Manager

A simple Laravel-based Task Manager built as a mini project.

## Project Code
WST21-PM-2026-SF

## Student Name
[Your Full Name Here]

## Course & Year
[Your Course & Year Here]

## Database Used
SQLite

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status (Pending / Completed)

## Tech Stack
- Laravel (Routes, Controller, Model, Blade Views)
- SQLite Database

## How It Works
- **Routes** (`routes/web.php`) define the URLs for the task manager (`/tasks`, `/tasks/create`, `/tasks/{id}/edit`, etc.) using a Laravel resource route.
- **TaskController** (`app/Http/Controllers/TaskController.php`) handles all logic for creating, reading, updating, and deleting tasks.
- **Task Model** (`app/Models/Task.php`) represents the `tasks` table and defines which fields can be mass-assigned.
- **Migration** (`database/migrations/..._create_tasks_table.php`) defines the `tasks` table structure: `task_name`, `description`, `status`, `due_date`.
- **Blade Views** (`resources/views/tasks/`) render the UI for listing, creating, and editing tasks, extending a shared `layout.blade.php` for consistent styling.

## Setup Instructions
1. Clone this repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and set `DB_CONNECTION=sqlite`
4. Create an empty `database/database.sqlite` file
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. Run `php artisan serve`
8. Visit `http://127.0.0.1:8000/tasks`