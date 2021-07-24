<?php
namespace App\Order;
use App\Billings\PaymentGateway;

class OrderDetail {
    private $paymentGateway;
    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;

    }
    public function all(){
        $this->paymentGateway->applyDiscount(20);
        return [
            'name' => 'abubakar',
            'address' => 'FSD',
        ];
    }
}
