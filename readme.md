<div align="center">
<a href="https://github.com/fahmirizalbudi/blogist" target="blank">
<img src="blogist.svg" width="300" alt="Logo" /><br/>
</a>

<br />
<br />

![](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)
![](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

</div>

<br/>

## Blogist

Blogist is a modern blogging platform designed for streamlined content creation and management. Built on the WordPress framework, it offers a robust set of features for efficient digital publishing.

## Features

- **Content Management:** Comprehensive editor for managing posts, pages, and media.
- **Organization:** Advanced taxonomy system for organizing content via categories and tags.

## Tech Stack

- **WordPress**: Core content management system (CMS).
- **PHP**: Primary server-side scripting language.
- **MySQL**: Relational database for persistent data storage.

## Getting Started

Follow these instructions to set up a local development environment.

### Prerequisites

- **PHP** (v7.4 or higher recommended).
- **MySQL** (Database server).
- **Web Server** (Apache, Nginx, or PHP built-in server).

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/fahmirizalbudi/blogist.git
   cd blogist
   ```

2. **Configure Database Settings:**

   ```bash
   cp wp-config-sample.php wp-config.php
   
   # Update the following values in wp-config.php:
   define( 'DB_NAME', 'blogist_db' );
   define( 'DB_USER', 'root' );
   define( 'DB_PASSWORD', 'your_password' );
   ```

3. **Start the Development Server:**

   ```bash
   php -S localhost:8000
   ```

## Usage

### Running the Application

- Access the frontend at [http://localhost:8000](http://localhost:8000).
- Access the administrative dashboard at [http://localhost:8000/wp-admin](http://localhost:8000/wp-admin).

## License

All rights reserved. This project is intended for educational purposes only and may not be distributed or used without explicit permission.
