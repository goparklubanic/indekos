<?php
require("./lib/class.kamar.inc.php");
$km = new kamar();

$kmr = $km->pickup2('kodeKamar,namaGedung,nomorKamar,namaKelas,dayaTampung,tarif',
					'viewKamar',"kodeKamar LIKE '".$_GET['kg']."%'",'kodeKamar');
//print_r($kmr);
$i = 0;
echo "<form action='act-kamar.php?mod=fit' method='POST'>";
echo "<table class='table'>";
echo "<tr><th>Kamar</th><th>Kapasitas</th><th>Kelas/Tarif</th></tr>";
while($i < count($kmr)){
	
	echo "
	<input type='hidden' name='kdkm[]' value='".$kmr[$i]['kodeKamar']."' />
	<tr>
	  <td>Kamar ".$kmr[$i]['namaGedung'].' No. '.$kmr[$i]['nomorKamar']."</td>
	  <td width='100'>
	    <input type='number' min='1' class='form-control' name='capa[]' 
	    value='".$kmr[$i]['dayaTampung']."' />
	  </td>
	  <td width='250'>
		  <select class='form-control' name='kelas[]'>";
	      $km->optKamar();
	echo "</select>
	  </td>
	</tr>
	";
	
	$i++;
}
echo "</table>";
echo "
<div style='text-align:right; margin-right: 20px;'>
	<input type='submit' value='Update' class='btn btn-primary'>
</div>";
echo "</form>";
