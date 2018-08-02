<?php

class WinterDiscountCalculator extends IDiscountCalculator{

  public function rule(){
    return "winter";
  }

  public function calculate($amount){
    return $amount * 0.10;
  }
}
