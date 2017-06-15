<?php
require("./lib/class.kontrak.inc.php");
$ktrx = new kontrak();
?>
<?php $ktrx->addBtn('kontrak','Kontrak'); ?>
<table class='table'>
  <thead>
    <tr>
      <th width='75'>NO. KONTRAK</th>
      <th>TANGGAL</th>
      <th>NAMA PENGHUNI</th>
      <th>GEDUNG</th>
      <th>NO. KAMAR</th>
      <th>AKHIR KONTRAK</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $ktrx->listKontrak(0);
  ?>
  </tbody>
</table>
<?php $ktrx->addBtn('kontrak','Kontrak'); ?>
