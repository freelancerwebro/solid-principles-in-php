<?php

interface ShippingInterface {
    public function getCost($order);
    public function getDate($order);
}