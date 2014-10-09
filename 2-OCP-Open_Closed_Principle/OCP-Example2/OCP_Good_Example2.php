 <?php

 /**
*   Acme/PaymentMethodInterface.php
*/
 namespace Acme;

 interface PaymentMethodInterface {

    public function acceptPayment($receipt);
 }

/**
*   Acme/PayPalPaymentMethod.php
*/
namespace Acme;

class PayPalPaymentMethod implements PaymentMethodInterface {

    public function acceptPayment($receipt)
    {
        // accept payment from Paypal
    }
}

/**
*   Acme/Checkout.php
*/
 namespace Acme;

class Checkout {

    public function process(Receipt $receipt, PaymentMethodInterface $payment)
    {
        $payment->acceptPayment($receipt);
    }

}