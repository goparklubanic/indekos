<?php
require("./lib/class.kamar.inc.php");
$kmr = new kamar();
?>
<?php $kmr->addBtn('kamar','Kamar'); ?>
<table class='table'>
  <thead>
    <tr>
      <th width='150'>KODE KAMAR</th>
      <th width='200'>GEDUNG &amp; NO. KAMAR</th>
      <th>KAPASITAS</th>
      <th>KELAS</th>
      <th>TARIF</th>
      <th>OPERASI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if($_GET['id']){
	$kmr->kamarGedung($_GET['id']);
  }elseif($_GET['km']){
	  $kmr->kamarKelas($_GET['km']);	  
  }else{
	$kmr->listKamar(0);
  }
  
  ?>
  </tbody>
</table>
<?php 
	$kmr->addBtn('kamar','Kamar'); 
?>
