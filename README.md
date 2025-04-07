<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Horde Echo Api

This is a Laravel application that serves as an API for the Horde Echo service.

## ⚙️ Prerequisites

Make sure you have these installed on your machine:

- [Docker](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/)

---

## 🚀 Getting Started

Follow these steps to run the app locally.

### 1. Clone the repository

```bash
git clone git@github.com:void-sister/horde-echo.git
cd horde-echo
```

### 2. Copy the environment file

```bash
cp .env.local .env
```

Edit the `.env` file to set your database and other configurations.

```bash
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=horde_echo_local
DB_USERNAME=laravel
DB_PASSWORD=secret
```

### 3. Build and run the Docker containers

```bash
docker compose up -d --build
```

### 4. Install Composer dependencies

```bash
docker compose exec app composer install
```

### 5. Generate application key

```bash
docker compose exec app php artisan key:generate
```

### 6. Run migrations

```bash
docker compose exec app php artisan migrate
```

### 7. Seed the database (optional)

```bash
docker compose exec app php artisan db:seed
```

### 8. Give permissions to storage and bootstrap/cache directories

```bash
sudo chmod -R 777 storage bootstrap/cache
```

### 9. Access the application
Open your web browser and go to:

````
http://localhost:8000/
````
You should see the welcome page.

### 10. Stop the application
To stop the application, run:

```bash
docker compose down
```
