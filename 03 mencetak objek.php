<?php
class Minuman {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$susu = new minuman("susu", "putih");
$kopi = new minuman("kopi", "hitam");
print_r($susu);
print "<p>";
print_r($kopi);


print_r("<p><strong>by :Novla Rahmulia");

?>