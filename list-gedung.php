<?php
require("./lib/class.gedung.inc.php");
$gdg = new gedung();
?>
<?php $gdg->addBtn('gedung','Gedung'); ?>
<table class='table'>
  <thead>
    <tr>
      <th>NAMA GEDUNG</th>
      <th>ALAMAT</th>
      <th>TELP</th>
      <th width='150'>JUMLAH KAMAR</th>
      <th width='100'>TK. HUNIAN</th>
      <th>OPERASI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $gdg->listGedung(0);
  ?>
  </tbody>
</table>
<?php $gdg->addBtn('gedung','Gedung'); ?>
