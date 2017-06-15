<?php
if(!$_GET['id']){
  $act = 'act-penghuni.php?mod=ins';
  $val = "Simpan";
  $ktp = '';
  $nma = '';
  $sex = '';
  $nhp = '';
}else{
  $act = 'act-penghuni.php?mod=upd';
  $val = "Update";
  $ktp = $tamu['nomorKTP'];
  $nma = $tamu['namaPenghuni'];
  $sex = $tamu['jenisKelamin'];
  $asl = $tamu['alamatAsal'];
  $nhp = $tamu['nomorHP'];
}
?>

<form action='<?php echo $act; ?>' method='POST' class='form-horizontal'>
  <!-- nomor ktp  -->
  <div class='form-group'>
    <label class='col-sm-3'>Nomor KTP</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='nomorKtp' value='<?php echo $ktp; ?>' />
    </div>
  </div>
  
 <!-- nama penghuni -->
  <div class='form-group'>
    <label class='col-sm-3'>Nama Penghuni</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='namaPenghuhi' value='<?php echo $nma; ?>' />
    </div>
  </div>
  
  <!-- jenis kelamin -->
  <div class='form-group'>
    <label class='col-sm-3'>Jenis Kelamin</label>
    <div class='col-sm-9'>
      <select class='form-control' name='kelamin'>
        <option <?php isSelected('Pria');?> value='Pria'>Pria</option>
        <option <?php isSelected('Wanita');?> value='Wanita'>Wanita</option>
      </select>
    </div>
  </div>
  
  <?php
    function isSelected($val){
		if( $val == $sex && $sex!='' ){echo 'selected'; }else{ echo ''; }
	}
  ?>
  <!-- alamat asal -->
  <div class='form-group'>
    <label class='col-sm-3'>Alamat Asal</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='alamatAsal' value='<?php echo $asl; ?>' />
    </div>
  </div>
  
  <!-- nomor hp-->
  <div class='form-group'>
    <label class='col-sm-3'>Nomor HP</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='nomorHP' value='<?php echo $nhp; ?>' />
    </div>
  </div>
  <?php
  if(!$_GET['id']){
  echo "
    <!-- kamar  -->
  <div class='form-group'>
    <label class='col-sm-3'>Kode Kamar</label>
    <div class='col-sm-9'>
      <input type='text' class='form-control' name='kdKamar' id='kdKamar' placeHolder='TULIS KODE KAMAR' />
      <div id='kamar-sugest'>nama gedung &amp; nomor kamar</div>
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
      <input type='text' class='form-control' name='klKamar' id='tarif' />
    </div>
  </div>
  
  ";    
  }
  ?>
    
  <!-- submit -->
  <div class='form-group'>
    <label class='col-sm-3'>&nbsp;</label>
    <div class='col-sm-9'>
      <input type='submit' class='btn btn-primary' value='<?php echo $val; ?>' />
      <input type='reset'  class='btn btn-primary' value='Reset' />
    </div>
  </div>
</form>

<script>
$('document').ready(function(){
	$('#kdKamar').keyup(function(){
		var kk = $('#kdKamar').val();
		$.ajax({url:'./ajax/seekKamar.php?kk='+kk,
			success:function(kamar){
			$('#kamar-sugest').html(kamar);
			}
		});
	});
});

function putValue(kamar,tarif){
	$('#kdKamar').val(kamar);
	$('#tarif').val(tarif);
	$('#kamar-sugest').html('');
}
</script>
