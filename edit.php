<?php

// Array ( [menu] => modify [data] => gedung [id] => RK-3 )
if($_GET['data']=='gedung'){
	
	require("./lib/class.gedung.inc.php");
	$gd = new gedung();
	
	$tbl = 'gedung';
	$key = $_GET['id'];
	$gedung = $gd->pickup('*',$tbl,'kodeGedung',array($key));
	
	include("./forms/gedung.php");	
}

if($_GET['data']=='kamar'){
	
	require("./lib/class.kamar.inc.php");
	$km = new kamar();
	
	$tbl = 'kamar';
	$key = $_GET['id'];
	$kamar = $km->pickup('*',$tbl,'kodeKamar',array($key));
	include("./forms/kamar.php");
}

if($_GET['data']=='tarif'){
	
	require("./lib/class.tarif.inc.php");
	$trf = new tarif();
	
	$tbl = 'kelasTarif';
	$key = $_GET['id'];
	$tarif = $trf->pickup('*',$tbl,'id',array($key));
	include("./forms/kelasTarif.php");
}

if($_GET['data']=='penghuni'){
	
	require("./lib/class.penghuni.inc.php");
	$kos = new penghuni();
	
	$tbl = 'penghuni';
	$key = $_GET['id'];
	$tamu = $kos->pickup('*',$tbl,'nomorKTP',array($key));
	include("./forms/penghuni.php");
}

if($_GET['data']=='bayar'){
	
	require("./lib/class.bayar.inc.php");
	$byr = new payment();
	$tbl = 'payment';
	$key = $_GET['id'];
	$byr->pickup('*',$tbl,'idPayment',array($key));
	include("./forms/bayar.php");
}

?>
