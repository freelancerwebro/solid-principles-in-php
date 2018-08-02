<?php

/**
 *
 */
interface IDiscountCalculate
{
    public function rule($ruleName);
    public function calculate($amount);
}
