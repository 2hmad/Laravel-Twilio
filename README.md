# Laravel Twilio

Laravel with Twilio Integration

[![Build Status](https://img.shields.io/travis/2hmad/laravel-twilio.svg?style=flat-square)](https://travis-ci.org/2hmad/Laravel-Twilio)
[![Total Downloads](https://img.shields.io/packagist/dt/2hmad/twilio.svg?style=flat-square)](https://packagist.org/packages/2hmad/Laravel-Twilio)
[![Latest Stable Version](https://img.shields.io/packagist/v/2hmad/twilio.svg?style=flat-square)](https://packagist.org/packages/2hmad/Laravel-Twilio)
[![License](https://img.shields.io/github/license/2hmad/Laravel-Twilio?style=flat-square)](#license)

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

To send a SMS message, you can use the `notify()` method available on the `LaraTwilio` Facade

```php
<?php

use Dot2hmad\LaravelTwilio\Facades\LaravelTwilio;

$sendSms = LaravelTwilio::notify('+2341234567892', 'Hello')

return $sendSms;
```

### License

laravel-twilio is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
