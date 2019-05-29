# Bookings

Simple Laravel Hotel Bookings

## Installation Instructions

- Open terminal and create bookings folder

```terminal
cd /
cd www
mkdir bookings
cd bookings
```

- Clone git repo

```terminal
git clone https://github.com/charlpcronje/bookings.git .
```

- Install Dependencies

```terminal
composer install
```

- Import mysql database

```terminal
TODO: mysql import command for bookings.sql
```

- Update .env file
  
```env
nano .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bookings
DB_USERNAME=root
DB_PASSWORD=
```

- Serve website to [localhost](http://localhost:8000)


```terminal
php artisan serve
```

- Open browser and change address to [localhost:8000](http://localhost:8000)

> login with
- email: charlcp@gmail.com
- password: 12345678

> Please report any bug to [charlcp@gmail.com](mailto:charlcp@gmail.com) or fix and request a pull request.
