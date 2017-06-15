<pre>
<?php
//print_r($_POST);
require('./lib/class.tarif.inc.php');
$laska = new tarif();

	$sets = 'namaKelas,tarif';
	$data = array($_POST['kelas'],$_POST['tarif']);
	$laska->insert('kelasTarif',$sets,$data);
	
echo "
<script>
	window.location='./?menu=tarif';
</script>
";

?>
</pre>
