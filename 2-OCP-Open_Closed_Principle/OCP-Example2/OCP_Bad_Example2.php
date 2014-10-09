 <?php namespace Acme;

class Checkout {

    public function process($receipt)
    {
        $this->acceptPayPal($receipt);
    }

    public function acceptPayPal($receipt)
    {
        // accecpt payment
    }
}

// now what if we need to accept a credit card payment?
