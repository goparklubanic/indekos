<?php
/*
echo "<pre>";
foreach($_POST AS $q=>$a){
	echo "\$_POST['".$q."'], \n";
}
echo "</pre>";
$_POST['idKontrak'], 
$_POST['kdKontrak'], 
$_POST['tanggal'], 
$_POST['jumlah'], 
$_POST['perMulai'], 
$_POST['perHabis'], 
*/

require('./lib/class.bayar.inc.php');
$byr = new payment();

if($_GET['mod']=='ins'){
	$sets = 'idKontrak,paymentDate,nominal,paymentPeriodFrom,paymentPeriodTill';
	$data = array($_POST['kdKontrak'], $_POST['tanggal'], $_POST['jumlah'], 
				  $_POST['perMulai'], $_POST['perHabis']);
	$byr->insert('payment',$sets,$data);
}

echo "
<script>
window.location='./?menu=bayar';
</script>
";

?>
