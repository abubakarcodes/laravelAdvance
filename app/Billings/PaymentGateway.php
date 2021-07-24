<?php
namespace App\Billings;
interface PaymentGateway {
public function charge($amount);
public function applyDiscount($amount);
}
