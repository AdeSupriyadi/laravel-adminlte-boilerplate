# Laravel AdminLTE 4 Boilerplate

A reusable Laravel application starter kit built with **Laravel 13**, **AdminLTE 4**, and **Bootstrap 5.3**.

This repository provides a foundation for building administrative web applications with authentication, role-based access control (RBAC), user management, and reusable administrative modules.

The project is designed to be cloned and customized for multiple Laravel applications.

## Features

### Core Application

- User authentication.
- User registration and email verification.
- Password reset and password confirmation.
- User management.
- Role-based access control (RBAC).
- Role and permission management.
- User profile management.
- Password and session management.
- Application settings.
- Activity logging.
- Administrative dashboard.

### Administrative Modules

The boilerplate includes reusable administrative modules:

- Projects management.
- Kanban board.
- Calendar and events.
- Chat and messaging.
- Mailbox.
- Notifications.
- File manager.

These modules provide implementation examples that can be adapted to the requirements of individual applications.

### UI Examples

Additional AdminLTE pages are included as UI examples:

- Invoice.
- Pricing.
- FAQ.
- Dashboard variations.
- Forms and validation.
- Tables and widgets.
- UI components and icons.
- Theme customization.

Some UI examples are demonstration pages rather than complete business modules.

## Technology Stack

| Component | Technology |
|---|---|
| Backend | PHP 8.3+ |
| Framework | Laravel 13 |
| Admin Template | AdminLTE 4 |
| CSS Framework | Bootstrap 5.3 |
| Frontend Build | Vite |
| JavaScript | Vanilla JavaScript |
| Testing | Pest |
| Code Formatting | Laravel Pint |
| AI Development Tools | Laravel Boost |

## Requirements

- PHP 8.3 or newer.
- Composer 2.
- Node.js and npm.
- SQLite, MySQL, or MariaDB.
- PHP extensions required by Laravel 13 and the installed dependencies.

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/AdeSupriyadi/laravel-adminlte-boilerplate.git
cd laravel-adminlte-boilerplate
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Configure environment

Copy the example environment file:

```bash
cp .env.example .env
```

On Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

### 4. Configure the database

Update the database configuration in `.env`.

For SQLite, configure the database connection and ensure the database file exists.

For MySQL or MariaDB, create the database and configure the connection details.

### 5. Run database migrations

```bash
php artisan migrate
```

### 6. Install frontend dependencies

```bash
npm install
```

### 7. Build frontend assets

```bash
npm run build
```

## Running the Application

Start the development environment:

```bash
composer run dev
```

Alternatively, start the Laravel development server:

```bash
php artisan serve
```

For frontend development with Vite, use:

```bash
npm run dev
```

## Testing

Run the automated test suite:

```bash
php artisan test
```

## Code Quality

Format PHP source files using Laravel Pint:

```bash
vendor/bin/pint
```

## Project Structure

The project follows Laravel's conventional application structure.

Important directories include:

```text
app/
├── Events/
├── Http/
│   ├── Controllers/
│   └── Middleware/
├── Models/
├── Notifications/
├── Policies/
└── Providers/

database/
├── factories/
├── migrations/
└── seeders/

resources/
└── views/
    └── adminlte/

routes/
```

## Laravel Boost

This project includes Laravel Boost for AI-assisted development.

Project-specific development guidelines and skills are available in:

- `AGENTS.md`
- `CLAUDE.md`
- `.claude/skills/`

Laravel Boost MCP configuration is provided through `.mcp.json`.

## Roadmap

Planned improvements include:

- Database-driven navigation management.
- Permission-aware dynamic sidebar menus.
- Expanded authorization policies.
- Reusable application settings.
- Improved audit logging.
- Optional API token authentication.
- Continuous integration and deployment workflows.
- Expanded automated test coverage.

## Optional Modules

Optional capabilities can be developed independently to keep the core boilerplate maintainable and reusable.

Optional modules should be documented separately and integrated only when their implementation is ready.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
