<?php
if(!$_GET['id']){
  $act = 'act-kelas.php?mod=ins';
  $val = "Simpan";
  
  $idk = '';
  $kls = '';
  $trf = '';
  
}else{
  $act = 'act-kelas.php?mod=upd';
  $val = "Update";
  
  $idk = $tarif['id'];
  $kls = $tarif['namaKelas'];
  $trf = $tarif['tarif'];
}
?>

<form action='<?php echo $act; ?>' method='POST' class='form-horizontal'>
  <!-- KELAS  -->
  <input type="hidden" name="id" value='<?php echo $idk; ?>' />
  <div class='form-group'>
    <label class='col-sm-3'>Nama Kelas </label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='kelas' value='<?php echo $kls; ?>' />
    </div>
  </div>
  
  <!-- harga  -->
  <div class='form-group'>
    <label class='col-sm-3'>Tarif Kamar </label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='tarif' value='<?php echo $trf; ?>' />
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
