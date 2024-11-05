# <div align="center">CordiSimpleRiwi
</div>

<div align="center"><img src="./resources/assets/logo.png" alt="Image Description" width="300"></div>

<p align="justify">This project is designed to manage events and reservations, facilitating effective and easy event management for both users and supplier. It has an advanced system that allows the creation and registration of new users, each user has the ability to update and / or delete your account. Users also have the ability to reserve seats in events and at the same time receive notifications every time they make a reservation, when an update is made in the event and also receive notifications from time to time to remember the event they have booked, As an administrator on the platform you can create, update and delete events with detailed information such as name, description, date, time, location, maximum seats, available seats, and status, you could also see the statistics of booking and users who are registered on the platform, in addition, the frontend of the application is built with Tailwind CSS, provide an amazing experience on every device in which you want to make use of the application.</p>

## Technologies Used

- **Laravel:** PHP framework for building modern web applications.
- **MySQL or Sqlite:** Database management system for storing users, reservations and events.
- **Blade:** Laravel's templating engine for building dynamic user interfaces. 
- **Tailwind CSS:** Utility-first CSS framework for a clean and responsive design.
- **Vite:** Development tool for fast builds and optimized asset bundling.
- **PHP:** Backend programming language.

## How to Use

1. **Clone the repository:**
```bash
git clone https://github.com/Jhon-Develop/CordiSimple.git
```
Clone the repository, preferably using the SSH security key or you can also use the HTTPS method.
<p align="center"><img src="https://happygitwithr.com/img/github-https-or-ssh-url-annotated.png" width="600" alt="example-clone-repository"></p>

2. **Navigate to the Project Directory:**
```bash
cd CordiSimple
```
3. **Switch to Your Working Branch:**
```bash
git checkout -b yourBranchName
```
4. **If necessary, Fetch the Latest Changes:**
```bash
git pull origin develop
```
5. **Install Project Dependencies:**
```bash
composer install
npm install
```
6. **Set up the environment file:**
```bash
cp .env.example .env
```
7. **Generate the application key:**
```bash
php artisan key:generate
```
8. **Set up the database and run migrations:**
```bash
php artisan migrate
```
9. **If you want you can load the seed data:**
```bash
php artisan db:seed
```
10. **Run the development server and build the frontend:**
```bash
composer run dev
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
