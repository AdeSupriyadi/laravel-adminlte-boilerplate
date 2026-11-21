# Laravel AdminLTE 4 Boilerplate

Reusable Laravel application boilerplate built with **Laravel 13** and **AdminLTE 4**.

This project provides a foundation for building administrative web applications with authentication, role-based access control (RBAC), and database-driven navigation.

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
| AI Development Tools | Laravel Boost |

## Features

### Core Features

- User authentication.
- User management.
- Role-based access control (RBAC).
- Role and permission management.
- Database-driven navigation menu.
- User profile management.
- Application dashboard.
- Activity logging.

### Application Modules

The project also includes example administrative modules:

- Projects management.
- Kanban board.
- Calendar and events.
- Chat and messaging.
- Mailbox.
- Notifications.
- File manager.
- Invoice and pricing pages.

These modules provide starting points for application-specific development and customization.

## Requirements

- PHP 8.3 or newer.
- Composer 2.
- Node.js and npm.
- A supported Laravel database, such as SQLite or MySQL/MariaDB.

## Installation

Clone the repository:

```bash
git clone <repository-url>
cd <project-directory>
```

Install PHP dependencies:

```bash
composer install
```

Create the environment configuration:

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

Configure the database connection in `.env` before running migrations.

Run database migrations:

```bash
php artisan migrate
```

Install frontend dependencies:

```bash
npm install
```

Build frontend assets:

```bash
npm run build
```

## Running the Application

Start the development environment:

```bash
composer run dev
```

Alternatively, start the Laravel server separately:

```bash
php artisan serve
```

## Running Tests

Run the test suite:

```bash
php artisan test
```

## Code Quality

Format PHP files using Laravel Pint:

```bash
vendor/bin/pint
```

## Laravel Boost

This project includes Laravel Boost for AI-assisted development.

Project-specific development guidelines and skills are available in:

- `AGENTS.md`
- `CLAUDE.md`
- `.claude/skills/`

Laravel Boost MCP configuration is provided through `.mcp.json`.

## Optional Modules

Optional application capabilities can be developed as independent modules to keep the core boilerplate lightweight.

See the `modules/` directory for module implementations and development status.

## License

MIT
