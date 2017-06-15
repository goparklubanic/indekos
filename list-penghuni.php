<?php
require("./lib/class.penghuni.inc.php");
$kos = new penghuni();
?>
<?php $kos->addBtn('penghuni','Penghuni'); ?>
<table class='table'>
  <thead>
    <tr>
      <th>NO. IDENTITAS</th>
      <th>NAMA PENGHUNI</th>
      <th>JENIS KELAMIN</th>
      <th>ALAMAT ASAL</th>
      <th width='150'>NOMOR HP</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $kos->listPenghuni(0);
  ?>
  </tbody>
</table>
<?php $kos->addBtn('penghuni','Penghuni'); ?>
