<?php

class ChristmasDiscountCalculator extends IDiscountCalculator{

  public function rule(){
    return "christmas";
  }

  public function calculate($amount){
    return $amount * 0.30;
  }
}
