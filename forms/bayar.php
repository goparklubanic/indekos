<?php
if(!$_GET['id']){
  $act = 'act-bayar.php?mod=ins';
  $val = "Simpan";
  $nmk = $_GET['nk'];
  $pid = '';
  $trf = $byr->pickup('tarif','viewKontrak','idKontrak',array($nmk));
  $jml = $trf['tarif'];
}else{
  $act = 'act-bayar.php?mod=upd';
  $val = "Update";
}

$dk = $byr->pickup('*','viewKontrak','idKontrak',array($nmk));

?>

<form action='<?php echo $act; ?>' method='POST' class='form-horizontal'>
  <div class='form-group'>
    <label class='col-sm-3'>Nama Penghuni</label>
    <div class='col-sm-9'>
    <?php echo $dk['namaPenghuni']." [ <i>".$dk['nomorKTP']." </i>]"; ?>
    </div>
  </div>
  
  <div class='form-group'>
    <label class='col-sm-3'>Kamar</label>
    <div class='col-sm-9'>
    <?php echo $dk['namaGedung']." No. ".$dk['nomorKamar']." [ <i>".$dk['kodeKamar']."</i> ]"; ?>
    </div>
  </div>
  
  <div class='form-group'>
    <label class='col-sm-3'>Masa Kontrak</label>
    <div class='col-sm-9'>
    <?php echo $byr->tanggalTerbaca($dk['periodFrom'])." s.d "
    .$byr->tanggalTerbaca($dk['periodTill']); ?>
    </div>
  </div>
  
  <input type='hidden' name='idKontrak' value="<?php echo $pid; ?>" /> 
  <!-- kode kontrak  -->
  <div class='form-group'>
    <label class='col-sm-3'>Nomor Kontrak</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='kdKontrak' value="<?php echo $nmk; ?>"/>
    </div>
  </div>

  <!-- tanggal bayar  -->
  <div class='form-group'>
    <label class='col-sm-3'>Tanggal Pembayaran</label>
    <div class='col-sm-9'>
      <input type='date' class='form-control' name='tanggal' value="<?php echo date('Y-m-d'); ?>" />
    </div>
  </div>

  <!-- jumlah  -->
  <div class='form-group'>
    <label class='col-sm-3'>Jumlah Pembayaran</label>
    <div class='col-sm-9'>
      <input type='number' class='form-control' name='jumlah' value='<?php echo $jml; ?>' />
    </div>
  </div>
  
  <!-- periode mulai  -->
  <div class='form-group'>
    <label class='col-sm-3'>Periode Pembayaran</label>
    <div class='col-sm-4'>
      <input type='date' class='form-control' name='perMulai' />
    </div>
    <div class='col-sm-1' style='text-align:center;'>s.d</div>
    <div class='col-sm-4'>
      <input type='date' class='form-control' name='perHabis' />
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
