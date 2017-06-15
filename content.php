<?php
error_reporting(E_ALL & ~E_NOTICE);
echo "<div class='tableTitle'>";
if(!$_GET['menu']){
  judulin('gedung');
}else{
  judulin($_GET['menu']);
}
echo " </div>
";

if(!$_GET['menu']){
  include("list-gedung.php");
}else{
  switch($_GET['menu']){
	case 'gedung'   : include ('list-gedung.php'); break;
	case 'kamar'    : include ('list-kamar.php'); break;
	case 'tarif'    : include ('list-tarif.php'); break;
	case 'penghuni' : include ('list-penghuni.php'); break;
	case 'kontrak'  : include ('list-kontrak.php'); break;
	case 'bayar'    : include ('list-bayar.php'); break;
	case 'modify'   : include ('edit.php'); break;
	case 'form'     : include ('edit.php'); break;
	case 'klkmr'    : include ('forms/kamarFit.php'); break;
	case 'prKtrx'   : include ('data-kontrak.php'); break;
  }
}

function judulin($list){
	echo "<h3>";
	switch($list){
	  case 'gedung': echo "DAFTAR GEDUNG"; break;
	  case 'kamar': echo "DAFTAR KAMAR"; break;
	  case 'tarif': echo "DAFTAR TARIF"; break;
	  case 'penghuni': echo "DAFTAR PENGHUNI KAMAR"; break;
	  case 'kontrak': echo "DAFTAR KONTRAK HUNIAN"; break;
	  case 'bayar': echo "DAFTAR PEMBAYARAN SEWA"; break;
	}
	echo "</h3>";
}
?>
