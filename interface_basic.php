<?php
interface ProdukEkspor{
  public function cekHargaUsd();
  public function cekNegara();
}

class Televisi implements ProdukEkspor{
  public function cekHargaUsd(){
    return 185;
  }
  public function cekNegara(){
    return ["Singapura", "Malaysia", "Thailand"];
  }
}

$produk01 = new Televisi();
echo $produk01->cekHargaUsd();
echo "<br>";
echo implode(", ",$produk01->cekNegara);
