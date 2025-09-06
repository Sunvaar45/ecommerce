# Copilot Instructions for E-Commerce Laravel Application

## Architecture Overview

This is a Laravel 12 e-commerce application using SQLite as the default database with a traditional MVC architecture. The app features Turkish language UI and follows Laravel conventions with some project-specific patterns.

### Core Models & Database Design
- **Products**: Main product entity with `has_discount` boolean flag for pricing logic
- **Categories**: Simple hierarchy with `sort_order` for display ordering
- **ProductImages**: Separate table with `is_main` flag to identify primary product images
- **User**: Extended with `status` field for account activation (0=inactive, 1=active)

Key relationship pattern: Use `->with('mainImage')` when eager loading products to avoid N+1 queries.

```php
// Standard product query pattern
Products::where('status', 1)
    ->with('mainImage')
    ->get();
```

### Controller Organization
- **HomeController**: Minimal, delegates category logic to `getActiveCategories()`
- **ProductsController**: Category-based product listing
- **ProductDetailsController**: Individual product views
- **AuthController**: Custom auth with status checking (not default Laravel auth)
- **Account/**: Nested controllers for user account management

### View Structure & Components
- **Layouts**: `app.blade.php` with CDN-based Bootstrap 5.3.3 + FontAwesome 6.7.0
- **Components**: Reusable Blade components in `resources/views/components/`
  - `product-card.blade.php`: Standard product display with discount badges
  - Alert components for flash messages
- **Partials**: Header/footer includes with Turkish navigation

### Asset Management
- **Frontend**: Vite + TailwindCSS 4.0 + Laravel Vite Plugin
- **Images**: Stored in `public/storage/images/` with subfolder organization
- **Styles**: Custom CSS in `public/css/styles.css` (not processed by Vite)

## Development Workflows

### Local Development Setup
```bash
# Environment setup (Windows/XAMPP)
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link

# Frontend development
npm install
npm run dev

# Backend server (XAMPP required)
# Start Apache & MySQL in XAMPP, then access via localhost/ecommerce
```

### Database Operations
- Default connection: SQLite (`database/database.sqlite`)
- Migrations: Standard Laravel structure in `database/migrations/`
- Status fields: Use integer (0/1) not boolean for status columns

### Authentication Patterns
Custom auth implementation with status checking:
```php
// Login attempt includes status check
Auth::attempt([
    'email' => $credentials['email'],
    'password' => $credentials['password'],
    'status' => 1, // Only active users
])
```

## Project-Specific Conventions

### Turkish Language Integration
- UI elements use Turkish text ("İndirim", "Listeye Ekle", "Sepete Ekle")
- Currency format: `number_format($price, 2, ',', '.') . ' ₺'`
- Routes use English slugs but views display Turkish content

### Image Handling Pattern
- Main images: `->where('is_main', 1)->where('status', 1)`
- Fallback: `default.png` for products without images
- Path structure: `storage/images/products/` + filename

### Route Organization
- Public routes: Direct controller actions
- Auth routes: Traditional login/register (not Laravel UI)
- Account routes: `middleware('auth')->prefix('/account')`
- Nested controllers for account management

### CSS/Styling Approach
- Bootstrap 5.3.3 via CDN (not compiled)
- Custom styles in separate CSS file
- FontAwesome for icons (heart, shopping cart, etc.)
- TailwindCSS available but minimally used

## Integration Points

### File Storage
- Images stored in `public/storage/` (requires `artisan storage:link`)
- No cloud storage integration
- Manual file management in controllers

### Frontend Build Process
- Vite handles `resources/css/app.css` and `resources/js/app.js`
- Bootstrap and FontAwesome loaded via CDN
- Custom styles bypass build process

### Data Flow Patterns
- Controllers fetch data, pass to views
- No API endpoints - traditional web app
- Blade components for reusable UI elements
- Flash messages via session

## Testing & Quality

- PHPUnit configured in `phpunit.xml`
- Laravel Pint for code formatting
- Tests in `tests/Feature/` and `tests/Unit/`

Run tests: `php artisan test`
Format code: `./vendor/bin/pint`

## Key Files for Understanding Codebase
- `routes/web.php`: All application routes
- `app/Models/Products.php`: Core business entity
- `resources/views/components/product-card.blade.php`: Reusable product display
- `app/Http/Controllers/AuthController.php`: Custom authentication logic
- `resources/views/layouts/app.blade.php`: Main layout template
