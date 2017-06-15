<?php
require("./lib/class.gedung.inc.php");
$gdg = new gedung();
if($_GET['mod']=='ins'){
	
	//passedVariables($_POST);
	$tabl = 'gedung';
	$sets = 'kodeGedung,namaGedung,alamat,telp,jmKamar';
	$data = array($_POST['kdGedung'],$_POST['nmGedung'],$_POST['alamat'],
				 $_POST['telp'],$_POST['jmKamar']);
	$gdg->insert($tabl,$sets,$data);
	$gdg->kamarGdBaru($_POST['kdGedung'],$_POST['jmKamar']);
	header('Location:./?menu=klkmr&kg='.$_POST['kdGedung']);
	
}elseif($_GET['mod']=='upd'){
	//$gdg->passedVariables($_POST);
	$sets = 'namaGedung,alamat,telp';
	$data = array($_POST['nmGedung'],$_POST['alamat'],$_POST['telp'],$_POST['kdGedung']);
	$tkey = 'kodeGedung';
	
	$gdg->update('gedung',$sets,$data,$tkey);
	
	header('Location:./?menu=gedung');
}else{
	header("Location:./");
}

?>
