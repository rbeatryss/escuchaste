# :ear: Escuchaste 

Escuchaste is a social media application developed using Laravel Blade and MySQL. It allows users to register, log in, and create posts, making it a simple and intuitive platform for sharing code snippets with others. Please note that this project is currently in development, and some features may not be available yet.

## Getting Started

These instructions will help you get a copy of Escuchaste up and running on your local machine for development and testing purposes. 

### Prerequisites

Before you begin, make sure you have the following tools installed on your system:

- [Docker](https://www.docker.com/)
- [Composer](https://getcomposer.org/)

### Installation

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/escuchaste.git
   ```

2. Change into the project directory:

   ```bash
   cd escuchaste
   ```

3. Create a file and name it `.env`:

   ```bash
   nano .env
   ```

4. Configure your `.env` file with your database settings, such as database name, username, and password.

5. Install Composer dependencies:

   ```bash
   composer install
   ```

6. Build and start the Docker containers:

   ```bash
   docker-compose up -d
   ```

7. Run the database migrations to create the necessary tables:

   ```bash
   docker-compose exec app php artisan migrate
   ```

8. Generate a Laravel application key:

   ```bash
   docker-compose exec app php artisan key:generate
   ```

9. Access the application in your web browser by visiting `http://localhost`.

## Usage

1. Create posts by clicking the "Create Post" button on the homepage.

2. View and interact with posts from other users on the homepage.

## Roadmap

Escuchaste is still in development, and there are plans to add more features and improvements in the future. Some of the upcoming features include:

- Register a new account or log in if you already have one.
- User profiles with avatars and additional user information.
- Commenting on posts.
- Likes and dislikes for posts.
- Improved search and filtering options.

## Contributing

If you'd like to contribute to this project, please follow these steps:

1. Fork the repository on GitHub.

2. Create a new branch with a descriptive name:

   ```bash
   git checkout -b feature/your-feature-name
   ```

3. Make your changes and commit them with meaningful messages:

   ```bash
   git commit -m "Add new feature or fix issue"
   ```

4. Push your changes to your forked repository:

   ```bash
   git push origin feature/your-feature-name
   ```

5. Create a pull request on the original repository to submit your changes for review.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Thanks to the Laravel community for their excellent documentation and support it came in handy for our first project with Laravel 

¿Escuchaste? 🐦

## Team

 + [Bea](https://github.com/rbeatryss) (Scrum Master)
 + [Anderson](https://github.com/A3C2112) (Product Owner)
 + [Sabina](https://github.com/Sjuniperus) (Scrum Team)
 + [Olga](https://github.com/OldChatot) (Scrum Team)


