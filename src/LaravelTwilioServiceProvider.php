<?php

namespace Dot2hmad\LaravelTwilio;

use Exception;
use Twilio\Rest\Client;
use Dot2hmad\LaravelTwilio\LaravelTwilio;
use Illuminate\Support\ServiceProvider;

class LaravelTwilioServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laraveltwilio.php', 'laraveltwilio');

        $this->app->bind('laraveltwilio', function () {
            $this->ensureConfigValuesAreSet();
            $client = new Client(config('laraveltwilio.account_sid'), config('laraveltwilio.auth_token'));
            return new LaravelTwilio($client);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishConfig();
        }
    }

    protected function ensureConfigValuesAreSet()
    {
        $mandatoryAttributes = config('laraveltwilio');

        foreach ($mandatoryAttributes as $key => $value) {
            if (empty($value)) {
                throw new Exception("Please provide a value for ${key}");
            }
        }
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/laraveltwilio.php' => config_path('laraveltwilio.php'),
        ], 'laraveltwilio-config');
    }
}
