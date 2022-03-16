# Laravel Twilio

Laravel with Twilio Integration

[![GitHub forks](https://img.shields.io/github/forks/2hmad/laravel-twilio)](https://github.com/2hmad/Laravel-Twilio/network)
[![GitHub stars](https://img.shields.io/github/stars/2hmad/Laravel-Twilio)](https://github.com/2hmad/Laravel-Twilio/stargazers)
[![GitHub license](https://img.shields.io/github/license/2hmad/Laravel-Twilio)](https://github.com/2hmad/Laravel-Twilio/blob/master/LICENSE.md)

## Installation

Begin by installing this package through Composer. Run this command from the Terminal:

```bash
composer require 2hmad/laravel-twilio
```

## Configurations

to publish the config file, run:

`php artisan vendor:publish --tag=laraveltwilio-config`

This is the content of the config file that will be published at `config/laraveltwilio.php`

Next, edit your `.env` file with your Twilio Credentials

```bash
TWILIO_ACCOUNT_SID=xxxx
TWILIO_AUTH_TOKEN=xxxx
TWILIO_SMS_FROM=xxxx
```

### Usage

To send a SMS message, you can use the `notify()` method available on the `LaravelTwilio` Facade

```php
<?php

use Dot2hmad\LaravelTwilio\Facades\LaravelTwilio;

$sendSms = LaravelTwilio::notify('+2341234567892', 'Hello')

return $sendSms;
```

### License

laravel-twilio is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
