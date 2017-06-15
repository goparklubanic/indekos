<?php
require("./lib/class.tarif.inc.php");
$trf = new tarif();
?>
<?php $trf->addBtn('tarif','Tarif'); ?>
<table class='table'>
  <thead>
    <tr>
      <th>KELAS KAMAR</th>
      <th>TARIF PER BULAN</th>
      <th>OPERASI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $trf->listTarif(0);
  ?>
  </tbody>
</table>
<?php $trf->addBtn('tarif','Tarif'); ?>
