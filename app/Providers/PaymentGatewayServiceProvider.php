<?php

namespace App\Providers;

use App\Billings\BankPaymentGateway;
use App\Billings\CardPaymentGateway;
use App\Billings\PaymentGateway;
use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(PaymentGateway::class, function ($app) {
            if (request()->payment_method == 'card') {
                return new CardPaymentGateway('usd');
            }
                return new BankPaymentGateway('usd');

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
