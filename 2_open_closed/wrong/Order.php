<?php

/**
 * Open/closed principle says that classes should be open for extension but closed for modification.
 * You have to change the Order class whenever we add a new shipping method to the app.
 *
 * You can solve the problem by applying the Strategy pattern. Start by extracting shipping methods into
 * separate classes with a common interface.
 */
class Order {
    protected $lineItems;
    protected $shipping;

    public function getTotal()
    {
        // return total
    }   

    public function getTotalWeight()
    {
        // return total weight
    }

    public function setShippingType($shipping)
    {
        $this->shipping = $shipping;
    }

    public function getShippingCost()
    {
        if($this->shipping == "ground") {
            if ($this->getTotal() > 100) {
                return 0;
            }

            return max(10, $this->getTotalWeight() * 1.5);
        }

        if ($this->shipping == "air") {
            return max(20, $this->getTotalWeight() * 3);
        }
    }

    public function getShippingDate()
    {
        
    }
}