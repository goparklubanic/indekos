<?php
$kdKmr = $_GET['kk'];
require("../lib/class.kamar.inc.php");
$kamar = new kamar();
$dftKamar = $kamar->pickup2('kodeKamar,namaGedung,nomorkamar,tarif','viewKamar',"kodeKamar LIKE '".$kdKmr."%'");
$i = 0;
while($i < count($dftKamar)){
	
	echo 
	"<a href=javascript:void(0) 
	onClick=putValue('".$dftKamar[$i]['kodeKamar']."','".$dftKamar[$i]['tarif']."')>".
	$dftKamar[$i]['namaGedung'].' '.$dftKamar[$i]['nomorKamar'].'</a>- IDR '.$dftKamar[$i]['tarif']."<br/>";
	$i++;
}
?>
