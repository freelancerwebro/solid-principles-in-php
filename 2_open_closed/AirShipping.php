<?php

class AirShipping implements ShippingInterface {

    public function getCost(Order $order) {
        return max(20, $order->getTotalWeight() * 3);
    }

    public function getDate(Order $order) {
        return "date on air shipping";
    }
}