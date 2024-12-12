# Music Library Web Application

A simple Laravel-based web application to manage and explore a music library. Users can view and interact with songs, albums, and artists in a clean and intuitive interface.

## Features

- Ability to browse a library of songs, albums, and artists.
- Interactive dashboard with popular songs and artists.
- Responsive UI, optimized for desktop viewing.

## Tech Stack

- Framework: Laravel 11
- Frontend: Blade Templates
- Database: PostgreSQL
- Server: Apache (LAMP stack)
- Authentication: Laravel Breeze

## Requirements

- PHP 8.2 or higher
- Composer
- PostgreSQL 17+
- Node.js (for frontend dependencies)

## Installation

- Clone the repository: ```git clone https://github.com/Adziaaa/Web_Music_Library.git```
- Navigate to the project directory: ```cd Web_Music_Library```
- Install dependencies: ```composer install```
- Copy the environment file: ```cp .env.example .env```
- Configure the environment file: Update database credentials and other settings in the .env file.
- Run database migrations: ```php artisan migrate```
- Install frontend dependencies: ```npm install && npm run dev```
- Start the development server: ```php artisan serve```
- Access the application: Open your browser and navigate to http://127.0.0.1:8000.

## Usage

- Home Page: View a list of popular songs and artists.
- Music Gallery: Explore songs, albums, and artists in detail.
- Create Playlists: Use the playlist creation form to add new playlists to the library.
- User Authentication: Log in to access personalized features.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.

## Credits

Developed as a student project by Group 7.
