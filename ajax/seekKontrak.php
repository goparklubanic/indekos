<?php
//echo "Mencari Penghuni dengan nama ".$_GET['np'];
echo "
<table class='table table-striped'>
  <tr>
    <th>Nomor Kontrak</th>
    <th>Nama Penghuni</th>
    <th>Nomor KTP</th>
    <th>Gedung</th>
    <th>Nomor Kamar</th>
  </tr>";

require("../lib/class.kontrak.inc.php");
$ktrx = new kontrak();
$cols = 'idKontrak,namaPenghuni,nomorKTP,namaGedung,nomorKamar';
$data = $ktrx->pickup2($cols,'viewKontrak',"namaPenghuni LIKE '%".$_GET['np']."%'",'namaPenghuni');
$r=0;
while($r < count($data)){
	echo "
	<tr>
	  <td><a href='./?menu=form&data=bayar&nk=".$data[$r]['idKontrak']."'>".$data[$r]['idKontrak']."</td>
	  <td>".$data[$r]['namaPenghuni']."</td>
	  <td>".$data[$r]['nomorKTP']."</td>
	  <td>".$data[$r]['namaGedung']."</td>
	  <td>".$data[$r]['nomorKamar']."</td>
	</tr>
	";
	$r++;
}

echo "
</table>
";
?>

