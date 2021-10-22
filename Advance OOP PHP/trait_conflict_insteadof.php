<?php
trait SmartElectronic{
  public function efisiensi(){
    return "Konsumsi daya 1.1";
  }
}

trait LowWatt{
  public function efisiensi(){
    return "Konsumsi daya 0.8";
  }
}

class SmartTV{
  use SmartElectronic, LowWatt {
    SmartElectronic::efisiensi insteadof LowWatt // memanggil methode efisiensi mili SmartElectronic
  }
}

$produk01 = new SmartTV;
echo $produk01->efisiensi(); // konsumsi daya 1.1

?>
