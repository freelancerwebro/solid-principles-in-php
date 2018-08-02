<?php

class Discount{

  double $discountedValue;

  public function calculate($rule, $amount){

    if($rule == "summer"){
      $this->discountedValue = $amount * 0.15;
    }

    if($rule == "winter"){
      $this->discountedValue = $amount * 0.10;
    }

    if($rule == 'christmas'){
      $this->discountedValue = $amount * 0.30;
    }

    return $this->discountedValue;
  }
}
