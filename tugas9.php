<?php
$angkaAwal=0;
$angkaAkhir=1;
  
echo "$angkaAwal $angkaAkhir";
 
for ($i=0; $i<20; $i++) {
  $hasil = $angkaAkhir + $angkaAwal;
  echo " $hasil";
  
  $angkaAwal = $angkaAkhir;
  $angkaAkhir = $hasil;
}
?>