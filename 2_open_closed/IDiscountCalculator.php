<?php

/**
 *
 */
interface IDiscountCalculator
{
    public function rule($ruleName);
    public function calculate($amount);
}
