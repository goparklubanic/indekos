<?php
if(!$_GET['id']){
  $act = 'act-gedung.php?mod=ins';
  $val = "Simpan";
}else{
  $act = 'act-gedung.php?mod=upd';
  $val = "Update";
}
?>

<form action='<?php echo $act; ?>' method='POST' class='form-horizontal'>
  <!-- tanggal kontrak  -->
  <div class='form-group'>
    <label class='col-sm-3'>Tanggal </label>
    <div class='col-sm-9'>
      <input type='date' class='form-control' name='tanggal' value = '<?php echo date('Y-m-d'); ?>' readonly />
    </div>
  </div>
  
 <!-- nomor ktp  -->
  <div class='form-group'>
    <label class='col-sm-3'>No KTP, Nama Pengguna</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='nomorKTP' id="ktp" placeHolder="TULIS NAMA DI SINI" />
      <div id="ktp-suggest">perkiraan nama penghuni</div>
    </div>
  </div>
  
  <!-- kamar  -->
  <div class='form-group'>
    <label class='col-sm-3'>Kode Kamar</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='kdKamar' id="kdKamar" placeHolder="TULIS KODE KAMAR" />
      <div id="kamar-sugest">nama gedung &amp; nomor kamar</div>
    </div>
  </div>
  
  <!-- mulai kontrak   -->
  <div class='form-group'>
    <label class='col-sm-3'>Mulai Kontrak</label>
    <div class='col-sm-9'>
      <input type='date' class='form-control' name='kontrakMulai' />
    </div>
  </div>
  
  <!-- habis kontrak   -->
  <div class='form-group'>
    <label class='col-sm-3'>Habis Kontrak</label>
    <div class='col-sm-9'>
      <input type='date' class='form-control' name='kontrakHabis' />
    </div>
  </div>
  
  <!-- tarif  -->
  <div class='form-group'>
    <label class='col-sm-3'>Tarif</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='klKamar' id="tarif" />
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
