<?php
if(!$_GET['id']){
  $act = 'act-gedung.php?mod=ins';
  $val = "Simpan";
  $gid = '';
  $ngd = '';
  $alm = '';
  $tlp = '';
  $kmr = '';
}else{
  
  $act = 'act-gedung.php?mod=upd';
  $val = "Update";
  $gid = $gedung['kodeGedung'];
  $ngd = $gedung['namaGedung'];
  $alm = $gedung['alamat'];
  $tlp = $gedung['telp'];
  $kmr = $gedung['jmKamar'];
}
?>

<form action='<?php echo $act; ?>' method='POST' class='form-horizontal'>
  <!-- kode gedung -->
  <div class='form-group'>
    <label class='col-sm-3'>Kode Gedung</label>
    <div class='col-sm-9'>
      <input type='text' maxlength='4' class='form-control' name='kdGedung' value='<?php echo $gid; ?>' />
    </div>
  </div>
  
  <!-- nama gedung -->
  <div class='form-group'>
    <label class='col-sm-3'>Nama Gedung</label>
    <div class='col-sm-9'>
      <input type='text' maxlength='40' class='form-control' name='nmGedung' value='<?php echo $ngd; ?>' >
    </div>
  </div>
  
  <!-- alamat -->
  <div class='form-group'>
    <label class='col-sm-3'>Alamat</label>
    <div class='col-sm-9'>
      <input type='text' maxlength='256' class='form-control' name='alamat' value='<?php echo $alm; ?>' >
    </div>
  </div>
  
  <!-- telp -->
  <div class='form-group'>
    <label class='col-sm-3'>Nomor Telpon</label>
    <div class='col-sm-9'>
      <input type='text' maxlength='16' class='form-control' name='telp' value='<?php echo $tlp; ?>' >
    </div>
  </div>
  
  <!-- jumlah kamar -->
  <div class='form-group'>
    <label class='col-sm-3'>Jumlah Kamar</label>
    <div class='col-sm-9'>
      <input type='text' maxlength='256' class='form-control' name='jmKamar' value='<?php echo $kmr; ?>' >
    </div>
  </div>
  
  <!-- submit -->
  <div class='form-group'>
    <label class='col-sm-3'>&nbsp;</label>
    <div class='col-sm-9'>
      <input type='submit' class='btn btn-primary' value='<?php echo $val; ?>' />
      <input type='reset'  class='btn btn-primary' value='Reset' />
    </div>
  </div>
</form>
