# Simple PHP Blog

This is a minimal blog application built with plain PHP. It allows users to:

- View a list of posts
- Create new posts
- Read individual posts

Data is stored in a local JSON file — no database or framework required.

---

## Live Demo (Optional)

If deployed (e.g. with a PHP-compatible host or local server), link it here:

http://localhost:8000

---

## Project Structure

simple-php-blog/
├── index.php            # Home page, lists all posts
├── post.php             # View a single post
├── new.php              # Create a new post
├── inc/
│   └── functions.php    # Read/write post data (JSON)
├── data/
│   └── posts.json       # Stored post data (auto-created)
└── README.md

---

## Requirements

- PHP >= 7.0
- Local dev environment (XAMPP, MAMP, or built-in PHP server)

---

## How to Run Locally

1. Clone the repository:

   cd simple-php-blog

2. Start the PHP development server:

   php -S localhost:8000

3. Open your browser and go to:

   http://localhost:8000

---

## Features

- No database — simple JSON file persistence
- Clean, minimal UI
- Full CRUD (Create, Read) for blog posts
- Modular file structure

