<?php

class SummerDiscountCalculator extends IDiscountCalculator{

  public function rule(){
    return "summer";
  }

  public function calculate($amount){
    return $amount * 0.15;
  }
}
