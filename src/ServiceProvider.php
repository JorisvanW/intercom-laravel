<?php

namespace Shadow\IntercomLaravel;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register()
    {
        $this->app->bind('intercom', function () {
            $id = Config::get('services.intercom.appId');
            $key = Config::get('services.intercom.appKey');

            return new IntercomLaravel($id, $key);
        });
    }
}