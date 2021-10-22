<?php
trait SmartElectronic{
  public $internet = "Telkom Indihome"; // trait boleh terdapat property
  public static $type = "Langganan"; // static property
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
echo $produk01->internet; // Telkom Indihome
echo "<br>";
echo $produk01::type; // Langganan
echo "<br>";
echo $produk01->efisiensi(); // Android 9.0 (Pie) Konsumsi daya 0.8
?>
