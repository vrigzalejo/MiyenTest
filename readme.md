<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss1.png" width="200px" height="200px" />
<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss2.png" width="200px" height="200px" />
<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss3.png" width="200px" height="200px" />
<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss4.png" width="200px" height="200px" />
<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss5.png" width="200px" height="200px" />
<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss6.png" width="200px" height="200px" />
<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss7.png" width="200px" height="200px" />
<img src="https://raw.githubusercontent.com/vrigzalejo/MiyenTest/master/resources/assets/screenshots/ss8.png" width="200px" height="200px" />

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

* Make sure that your credentials are match in the `.env`*

```
DB_HOST=localhost
DB_DATABASE=VrigzTest
DB_USERNAME=root
DB_PASSWORD=
```

5) Do the following commands.

```
bower install
npm install ( if you get Error: EACCES, execute it with sudo )
composer install
php artisan migrate
php artisan serve
```

6) then go to this link

```
http://127.0.0.1:8000/
```

#### To compile assets, do this command.

```
gulp
```

