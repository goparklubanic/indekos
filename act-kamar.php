<?php
//print_r($_POST);
require('./lib/class.kamar.inc.php');
$kamar = new kamar();
if($_GET['mod']=='ins'){
	$nkmr = $kamar->kokam($_POST['kdGedung'],$_POST['nmrKamar']);
	$sets = 'kodeKamar,kodeGedung,nomorKamar,dayaTampung,kelasTarif';
	$data = array($nkmr,$_POST['kdGedung'],$_POST['nmrKamar'],$_POST['capacity'],$_POST['klTarif']);
	$kamar->insert('kamar',$sets,$data);
	$kamar->tambahKamar($_POST['kdGedung']);
	$obj  = 'gedung';
}

if($_GET['mod']=='fit'){
	$i=0;
	
	while($i<count($_POST['capa'])){
	
		$i++;
		$sets = 'dayaTampung,kelasTarif';
		$data = array($_POST['capa'][$i],$_POST['kelas'][$i],$_POST['kdkm'][$i]);
		$key  = 'kodeKamar';
		$kamar->update('kamar',$sets,$data,$key);
		}
		$obj='gedung';
}

if($_GET['mod']=='upd'){
	$kdkm = $_POST['kdGedung'].sprintf("%03d",$_POST['nmrKamar']);
    $sets = 'kodeGedung,nomorKamar,dayaTampung,kelasTarif';
    $data = array($_POST['kdGedung'],$_POST['nmrKamar'],
				  $_POST['capacity'],$_POST['klTarif'],$kdkm);
	$key = 'kodeKamar';
	$kamar->update('kamar',$sets,$data,$key);
	$obj = 'kamar';
}

echo "
<script>
	window.location='./?menu=$obj';
</script>
";

?>
