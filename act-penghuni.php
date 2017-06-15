<pre>
<?php

// foreach($_POST AS $q=>$a){	echo ",\$_POST['".$q."']"; }

require('./lib/class.penghuni.inc.php');
$tamu = new penghuni();
	//penghuni baru
	$sets = 'nomorKTP,namaPenghuni,jenisKelamin,alamatAsal,nomorHP';
	$data = array($_POST['nomorKtp'],$_POST['namaPenghuhi'],
				  $_POST['kelamin'],$_POST['alamatAsal'],
				  $_POST['nomorHP']);
				  
	$tamu->insert('penghuni',$sets,$data);
	
	//kontrakBaru
	$sets = 'tgKontrak,nomorKTP,kodeKamar,periodFrom,periodTill,tarif';
	$data = array(date('Y-m-d'),$_POST['nomorKtp'],$_POST['kdKamar'],
				  $_POST['kontrakMulai'],$_POST['kontrakHabis'],
				  $_POST['klKamar']);
	$tamu->insert('kontrak',$sets,$data);
	
	//Tambah occupancy
	$tamu->occupdate($_POST['kdKamar']);
	
echo "
<script>
	window.location='./?menu=penghuni';
</script>
";

?>
</pre>


