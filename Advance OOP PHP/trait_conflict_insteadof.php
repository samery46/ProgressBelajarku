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
    SmartElectronic::efisiensi insteadof LowWatt; // memanggil methode efisiensi milik SmartElectronic
    LowWatt:: efisiensi as efisiensiLow; // agar bisa diakses ,memberi nama baru/alias methode efisiensi milik trait LowWatt
  }
}

$produk01 = new SmartTV;
echo $produk01->efisiensi(); // konsumsi daya 1.1
echo "<br>";
echo $produksi01->efisiensiLow(); // konsumsi daya 0.8
?>
