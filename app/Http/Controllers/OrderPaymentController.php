<?php

namespace App\Http\Controllers;

use App\Billings\PaymentGateway;
use App\Order\OrderDetail;
use Illuminate\Http\Request;

class OrderPaymentController extends Controller
{
    public function store(OrderDetail $orderDetail, PaymentGateway $paymentGateway)
    {
        $orderDetail = $orderDetail->all();
        dd($paymentGateway->charge(200));
    }
}
