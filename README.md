## Filament Laravel Admin Panel

This is a Filament-powered admin panel built with Laravel. Filament is a powerful tool for creating beautiful admin dashboards, resource management, and form handling with minimal effort.

## 🚀 Features

Admin Panel with a user-friendly interface

CRUD Operations for managing posts

Filament v3 Integration for tables and forms

Authentication & Authorization (Laravel Breeze / Jetstream)

Role-based Access Control (RBAC) (optional)

Responsive Design with Tailwind CSS

🛠 Installation & Setup

Follow these steps to set up the project on your local machine:

1️⃣ Clone the Repository

 git clone https://github.com/your-username/filament-laravel-admin.git
 cd filament-laravel-admin

2️⃣ Install Dependencies

 composer install
 npm install

3️⃣ Configure Environment Variables

Copy the example .env file and configure the database connection:

 cp .env.example .env

Update your database details inside .env:

 DB_DATABASE=your_database_name
 DB_USERNAME=root
 DB_PASSWORD=your_password

4️⃣ Generate Application Key

 php artisan key:generate

5️⃣ Run Migrations & Seed Database

 php artisan migrate --seed

6️⃣ Serve the Application

 php artisan serve

The application will be available at: http://127.0.0.1:8000

📌 Admin Panel Access

Once the app is running, you can access the Filament admin panel by visiting:

 http://127.0.0.1:8000/admin

Default Admin Credentials:

 Email: admin@example.com
 Password: password

(Modify the credentials in DatabaseSeeder.php if needed)


✅ Deployment

For deploying the project, use Laravel Forge, DigitalOcean, or any hosting provider with PHP and MySQL support. Recommended steps:

composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan migrate --force

📄 License

This project is open-source and available under the MIT License.

📢 Contributing

If you’d like to contribute, feel free to fork the repo, create a branch, and submit a PR!

Happy coding! 🚀