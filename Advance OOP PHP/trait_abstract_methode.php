<?php
trait SmartElectronic{
  public function cekOS(){
    return "Android 9.0 (Pie)";
  }
  abstract public function cekProcessor();
}

class SmartTV {
  use SmartElectronic;
  public function cekProcessor(){
    return "Snapdragon 845";
  }
}

$produksi = new SmartTV;
echo $produk01->cekOS(); // "Android 9.0 (Pie)
echo "<br>";
echo $produk01->cekProcessor();  // Snapdragon 845
?>
