<?php
//error_reporting(0);
//$rootDir=$_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME STAY MGMT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <style type='text/css'>
  table.table tr td {font-family:serif; font-size:10pt; padding: 0px; margin:0;}
  td.field{width: 200px;}
  </style>
</head>
<body>

<?php
require('./lib/class.kontrak.inc.php');
$ktrx = new kontrak();
$data = $ktrx->pickup('*','viewKontrak','idKontrak',array($_GET['id']));
//echo "<pre>"; print_r($data); echo "</pre>";

?>
<h4>KARTU KONTRAK HUNIAN</h4>
<table class='table'>
  <!-- nomor kontrak -->
  <tr>
    <td class='field'>Nomor &amp; Tanggal Kontrak</td>
    <td><?php echo sprintf('%04d',$data['idKontrak']); ?>
		[ <?php echo $ktrx->tanggalTerbaca($data['tgKontrak']); ?> ]</td>
  </tr>
  
  <!-- nama dan ktp penghuni -->
  <tr>
    <td class='field'>Nama Penghuni<br>No. KTP</td>
    <td><b><?php echo $data['namaPenghuni']; ?></b><br/><?php echo $data['nomorKTP']; ?></td>
  </tr>
  
  <!-- kamar hunian -->
  <tr>
    <td class='field'>Kamar Hunian</td>
    <td><?php 
			echo "Gedung ".$data['namaGedung'].", Nomor ".$data['nomorKamar']
			." [ ".$data['kodeKamar']." ]";
		?>
	</td>
  </tr>
  
  <!-- Periode Kontrak -->
  <tr>
    <td class='field'>Periode Kontrak</td>
    <td>
		<?php
			echo $ktrx->tanggalTerbaca($data['periodFrom']) ." s.d ".
			$ktrx->tanggalTerbaca($data['periodTill']);
		?>
    </td>
  </tr>
  
  <!-- Harga Kontrak -->
  <tr>
    <td class='field'>Tarif Kontrak</td>
    <td>
		<?php echo $ktrx->numfor($data['tarif']); ?> / Bulan
    </td>
  </tr>
  
</table>
</body>
</html>

