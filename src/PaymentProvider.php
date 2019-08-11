<?php
namespace SuperAvalon\Payment;

use Illuminate\Support\ServiceProvider;

class PaymentProvider extends ServiceProvider
{
    public function boot()
    {
        if (!file_exists(config_path('payment.php'))) {
            $this->publishes([
                dirname(__DIR__) . '/config/payment.php' => config_path(payment),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/payment.php', 'iimage'
        );
    }
}