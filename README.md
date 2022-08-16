# Package to send email 📦🛸🚀

[![Issues](https://img.shields.io/github/issues/naftalivo/send-emailcontact-package.svg?style=flat-square)](https://github.com/naftalivo/send-emailcontact-package/issues)
[![Stars](https://img.shields.io/github/stars/naftalivo/send-emailcontact-package.svg?style=flat-square)](https://github.com/naftalivo/send-emailcontact-package/stargazers)



Package to send emails and store to database sender information

## Installing Package

The recommended way of this package is through composer
[Composer](https://getcomposer.org/).

```bash
composer require naftalivo/emailcontact
```

Add in config > app.php this line at the end of providers

```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        ...
        Naftalivo\EmailContact\EmailContactServiceProvider::class,

    ],
```

## Test Package

To test, go to 
- run php artisan serve

- in localhost:8000 and add /emailcontact

- configure your email service data in the .env file

```bash
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```