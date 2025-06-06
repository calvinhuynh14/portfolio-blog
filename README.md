# Personal Blog Portfolio

A personal blog/portfolio website built with Laravel and Docker.

## Prerequisites

-   Docker Desktop
-   Git

## Setup Instructions

1. **Clone the repository**

    ```sh
    git clone <your-repo-url>
    cd portfolio-blog
    ```

2. **Start the Docker containers**

    ```sh
    docker compose up -d
    ```

3. **Install PHP dependencies**

    ```sh
    docker compose exec app composer install
    ```

4. **Generate Laravel application key**

    ```sh
    docker compose exec app php artisan key:generate
    ```

5. **Run database migrations**

    ```sh
    docker compose exec app php artisan migrate
    ```

6. **Install and build frontend assets**

    ```sh
    docker compose exec app npm install
    docker compose exec app npm run build
    ```

7. **Access the website**
    - Open your browser and go to `http://localhost:8000`

## Starting the Project

After the initial setup, to start working on the project:

1. **Start Docker Desktop**

    - Make sure Docker Desktop is running on your machine

2. **Start the containers**

    ```sh
    docker compose up -d
    ```

3. **If you're working on frontend assets**, start Vite in development mode:

    ```sh
    docker compose exec app npm run dev
    ```

4. **Access the website**
    - Open your browser and go to `http://localhost:8000`

## Stopping the Project

When you're done working:

1. **Stop Vite** (if running)

    - Press `Ctrl + C` in the terminal where Vite is running

2. **Stop the containers**
    ```sh
    docker compose down
    ```

## Quick Commands Reference

-   Start containers: `docker compose up -d`
-   Stop containers: `docker compose down`
-   View logs: `docker compose logs`
-   Access container shell: `docker compose exec app bash`
-   Run Laravel commands: `docker compose exec app php artisan <command>`
-   Run npm commands: `docker compose exec app npm <command>`

## Development

-   **Start Vite development server** (for frontend development)

    ```sh
    docker compose exec app npm run dev
    ```

-   **Stop the containers**
    ```sh
    docker compose down
    ```

## Environment Variables

Create a `.env` file in the root directory with the following variables:

```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=portfolio_blog_db
DB_USERNAME=admin
DB_PASSWORD=userpassword
```

## Project Structure

-   `app/` - Laravel application code
-   `docker/` - Docker configuration files
-   `public/` - Publicly accessible files
-   `resources/` - Frontend assets (CSS, JS, views)
-   `database/` - Database migrations and seeders

## Common Issues

1. **Database Connection Issues**

    - Make sure the database credentials in `.env` match those in `docker-compose.yml`
    - Try `docker compose down -v` to reset the database

2. **Vite Manifest Not Found**

    - Run `docker compose exec app npm run build`

3. **Container Restarting**
    - Check logs with `docker compose logs db`
