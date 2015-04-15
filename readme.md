## To Install

1) `git clone https://github.com/vrigzalejo/MiyenTest.git`

2) `cd MiyenTest`

3) create `.env` inside MiyenTest folder

4) copy this to `.env` file.

```
   APP_ENV=local
   APP_DEBUG=true
   APP_KEY=zAb5cGRVVwuh9gdJGvYNyd8EcjQD14Wv
   
   DB_HOST=localhost
   DB_DATABASE=YourDatabaseName
   DB_USERNAME=YourUsername
   DB_PASSWORD=YourPassword
   
   CACHE_DRIVER=file
   SESSION_DRIVER=file
   QUEUE_DRIVER=sync
   
   MAIL_DRIVER=smtp
   MAIL_HOST=mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=null
   MAIL_PASSWORD=null
```

4) create any database name. `e.g. VrigzTest`

#### Do the following commands.
```
bower install
npm install
composer install
php artisan migrate
php artisan serve
```

5) then go the this link
```
http://127.0.0.1:8000/
```
