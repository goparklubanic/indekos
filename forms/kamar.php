<?php
if(!$_GET['id']){
  $act = 'act-kamar.php?mod=ins';
  $val = "Simpan";
  $kkm = '';
  $kdg = '';
  $nkm = '';
  $dyt = '';
  $kls = '';
  $ocu = '';
  
}else{
  $act = 'act-kamar.php?mod=upd';
  $val = "Update";
  
  $kkm = $kamar['kodeKamar'];
  $kdg = $kamar['kodeGedung'];
  $nkm = $kamar['nomorKamar'];
  $dyt = $kamar['dayaTampung'];
  $kls = $kamar['kelasTarif'];
  $ocu = $kamar['occupancy'];
}
?>

<form action='<?php echo $act; ?>' method='POST' class='form-horizontal'>
  <!-- kode gedung -->
  <div class='form-group'>
    <label class='col-sm-3'>Nama Gedung</label>
    <div class='col-sm-9'>
      <select class='form-control' name='kdGedung'>
		<option value="">Pilih Gedung</option>
		<?php $km->optGedung(); ?>
      </select>
    </div>
  </div>
  
  <!-- nomor kamar -->
  <div class='form-group'>
    <label class='col-sm-3'>Nomor Kamar</label>
    <div class='col-sm-9'>
      <input type='number' min='1' maxlength='3' class='form-control' name='nmrKamar'
      value ='<?php echo $nkm; ?>' />
    </div>
  </div>
  
  <!-- daua tampung -->
  <div class='form-group'>
    <label class='col-sm-3'>Daya Tampung</label>
    <div class='col-sm-9'>
      <input type='number' maxlength='2' min='1' class='form-control' name='capacity'
      value ='<?php echo $dyt; ?>' />
    </div>
  </div>
  
  <!-- daua tampung -->
  <div class='form-group'>
    <label class='col-sm-3'>Kelas dan Tarif</label>
    <div class='col-sm-9'>
      <select class='form-control' name='klTarif'>
        <option value="">Pilih Tarif Kamar</option>
        <?php $km->optKamar(); ?>
      </select>
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
