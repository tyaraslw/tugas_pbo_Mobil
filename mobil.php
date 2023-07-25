<?php
class mobil{
    public $merk = "toyota";
    public $tahunProduksi = 2018;
    public $warna = "putih";
    public $kecepatan = 10;

    public function start(){
        echo "mobil berjalan";
    }

    public function akselerasi(){
        echo "mobil akselerasi";
    }

    public function berhenti(){
        echo "mobil berhenti";
    }
}
$mobil1 = new mobil();
echo "Mobil_1";
echo "<br/>";
echo $mobil1->merk;
echo "<br/>";
echo $mobil1->tahunProduksi;
echo "<br/>";
echo $mobil1->warna;
echo "<br/>";
echo $mobil1->kecepatan;
echo "<br/>";

echo "<br/>";
$mobil2 = new mobil();
echo "Mobil_2";
echo "<br/>";
echo $mobil1->merk="Daihatsu";
echo "<br/>";
echo $mobil1->tahunProduksi=2001;
echo "<br/>";
echo $mobil1->warna="Hitam";
echo "<br/>";
echo $mobil1->kecepatan=70;
echo "<br/>";

echo "<br/>";
$mobil1->berhenti();
echo "<br/>";
$mobil2->start();
echo "<br/>";
$mobil2->akselerasi();