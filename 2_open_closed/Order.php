<?php

/**
 * Adding new shipping method doesn't require changing existing classes.
 * 
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

    public function setShippingType(ShippingInterface $shipping)
    {
        $this->shipping = $shipping;
    }

    public function getShippingCost()
    {
        return $this->shipping->getCost($this);
    }

    public function getShippingDate()
    {
        return $this->shipping->getDate($this);    
    }
}