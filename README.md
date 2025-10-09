<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a id="readme-top"></a>

<!-- PROJECT SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/dettinjo/laravel-blog">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Logo" width="400">
  </a>

  <h3 align="center">Laravel Blog</h3>

  <p align="center">
    A comprehensive blog platform built with the Laravel framework.
    <br />
    <a href="https://github.com/dettinjo/laravel-blog"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/dettinjo/laravel-blog">View Demo</a>
    ·
    <a href="https://github.com/dettinjo/laravel-blog/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/dettinjo/laravel-blog/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This project is a fully functional blog created with Laravel. It was developed as part of a project for the course 10015 Server Side Systems during my semester abroad at the University of the West of Scotland.

It includes a range of features that make up a modern web application:
*   User authentication (registration, login, logout).
*   A robust post management system with categories and authors.
*   An admin backend to create, read, update, and delete posts.
*   A commenting system for users to engage with posts.
*   Dynamic filtering of posts by category, author, and search query.
*   Clean, component-based views using Laravel Blade.

This project demonstrates a practical application of the Laravel framework and its powerful features, such as the Eloquent ORM, Blade templating engine, and built-in authentication systems.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

This project was built using the following technologies and frameworks.

* [![Laravel][Laravel.com]][Laravel-url]
* [![PHP][PHP.net]][PHP-url]
* [![MySQL][MySQL.com]][MySQL-url]
* [![Tailwind CSS][TailwindCSS.com]][TailwindCSS-url]
* [![Alpine JS][AlpineJS.dev]][AlpineJS-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

Make sure you have the following software installed on your machine.
*   PHP >= 7.3
*   Composer
*   Node.js & NPM
*   A database server (e.g., MySQL)

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/dettinjo/laravel-blog.git
   ```
2. Navigate into the project directory
   ```sh
   cd laravel-blog
   ```
3. Install PHP dependencies
   ```sh
   composer install
   ```
4. Install NPM packages
   ```sh
   npm install
   ```
5. Compile front-end assets
   ```sh
   npm run dev
   ```
6. Create a copy of the `.env.example` file and name it `.env`
   ```sh
   cp .env.example .env
   ```
7. Generate an application key
   ```sh
   php artisan key:generate
   ```
8. Configure your database credentials in the `.env` file
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_blog
   DB_USERNAME=root
   DB_PASSWORD=
   ```
9. Run the database migrations and seed the database with sample data
   ```sh
   php artisan migrate --seed
   ```
10. Create a symbolic link for the public storage disk
    ```sh
    php artisan storage:link
    ```
11. Start the local development server
    ```sh
    php artisan serve
    ```
The application will be available at `http://127.0.0.1:8000`.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

Once the application is running, you can explore its features:
*   **Public View**: Browse posts on the homepage. Filter them by category, author, or use the search bar.
*   **User Registration**: Create a new account via the "Register" link.
*   **User Login**: Log in to an existing account to leave comments on posts.
*   **Admin Dashboard**: To access the admin features, you must use a user with the username `b00484071`. The database seeder does not create this user, so you will need to register a new user with this specific username. Once logged in as this user, you will see "Dashboard" and "New Post" links in the user menu.
    *   **Dashboard**: View all posts and perform edit or delete actions.
    *   **New Post**: Create a new blog post using the provided form.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [ ] Implement user roles and permissions more granularly.
- [ ] Add a user profile page.
- [ ] Allow posts to have multiple tags.
- [ ] Develop a more feature-rich text editor for creating posts.
- [ ] Add social media sharing options for posts.

See the [open issues](https://github.com/dettinjo/laravel-blog/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` file for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Joel Dettinger - dettinger.joel@gmail.com

Project Link: [https://github.com/dettinjo/laravel-blog](https://github.com/dettinjo/laravel-blog)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

*   [Laravel From Scratch 2021 by Laracasts](https://laracasts.com/series/laravel-8-from-scratch)
*   [Choose an Open Source License](https://choosealicense.com)
*   [Img Shields](https://shields.io)
*   [Font Awesome](https://fontawesome.com)
*   [Best-README-Template](https://github.com/othneildrew/Best-README-Template)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
[contributors-shield]: https://img.shields.io/github/contributors/dettinjo/laravel-blog.svg?style=for-the-badge
[contributors-url]: https://github.com/dettinjo/laravel-blog/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/dettinjo/laravel-blog.svg?style=for-the-badge
[forks-url]: https://github.com/dettinjo/laravel-blog/network/members
[stars-shield]: https://img.shields.io/github/stars/dettinjo/laravel-blog.svg?style=for-the-badge
[stars-url]: https://github.com/dettinjo/laravel-blog/stargazers
[issues-shield]: https://img.shields.io/github/issues/dettinjo/laravel-blog.svg?style=for-the-badge
[issues-url]: https://github.com/dettinjo/laravel-blog/issues
[license-shield]: https://img.shields.io/github/license/dettinjo/laravel-blog.svg?style=for-the-badge
[license-url]: https://github.com/dettinjo/laravel-blog/blob/main/LICENSE
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[PHP.net]: https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/
[MySQL.com]: https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white
[MySQL-url]: https://www.mysql.com/
[TailwindCSS.com]: https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[TailwindCSS-url]: https://tailwindcss.com/
[AlpineJS.dev]: https://img.shields.io/badge/Alpine.js-8BC0D0?style=for-the-badge&logo=alpinedotjs&logoColor=black
[AlpineJS-url]: https://alpinejs.dev/
