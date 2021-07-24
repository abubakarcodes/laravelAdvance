<?php

namespace App\Billings;

use App\Billings\PaymentGateway;
use Illuminate\Support\Str;

class CardPaymentGateway implements PaymentGateway
{

    private $currency;
    private $discount;
    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }



    public function applyDiscount($amount)
    {

        $this->discount = $amount;
    }


    public function charge($amount)
    {
        $fee =   $amount * 0.05;
        return [
            'charge' => $amount - $this->discount + $fee,
            'confirmation' => Str::random(10),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fee' => $fee,
        ];
    }
}
