<?php
interface ProdukEkspor {
  public function cekHargaUsd();
  public function cekNegara();
  public const biayaPajak = 0.5; // konstanta biaya pajak
}

echo ProdukEkspor::biayaPajak; // 0.5  diakses dengan menggunakan scope resolution "::"

interface ProdukMakanan {
  public function cekExpired();
}

interface ProdukMakananBeku {
  public function cekSuhuMin();
}

class Nugget implements ProdukEkspor, ProdukMakanan, ProdukMakananbeku {
  public function cekHargaUsd(){
    return 7.5;
  }
  public function cekNegara(){
    return ["Singapura", "Malaysia", "Thailand"];
  }
  public function cekExpired(){
    return "April 2019";
  }
  public function cekSuhuMin(){
    return -14;
  }
}

$produksi01 = new Nugget();
echo $produk01->cekHargausd();
echo "<br>";
echo implode(", ",$produk01->cekNegara());
echo "<br>";
echo $produk01->cekExpired();
echo "<br>";
echo $produk01->cekSuhuMin();
