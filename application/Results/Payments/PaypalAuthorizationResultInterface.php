<?php


namespace Application\Results\Payments;


use Domain\Entities\Payment;

interface PaypalAuthorizationResultInterface
{
    public function setPayment(Payment $payment): void;
    public function getPayment(): Payment;
}
