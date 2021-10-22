<?php
trait SmartElectronic{
  public function cekOS(){
    return "Android 9.0 (Pie)";
  }
}

trait LowWatt{
  use SmartElectronic;
  public function efisiensi(){
    return $this->cekOS()." Konsumsi daya 0.8";
  }  
}

class SmartTV{
  use LowWatt;
}

$produk01 = new SmartTV;
echo $produk01->efisiensi(); // Android 9.0 (Pie) Konsumsi daya 0.8
