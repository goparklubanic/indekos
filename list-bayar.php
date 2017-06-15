<div>
<label>Cari Nomor Kontrak</label>
<input type='text' class='form-control' id='kontraktor' placeHolder="Nama Penghuni">
</div>
<div>&nbsp;</div>
<div id='datakontrak'></div>

<div class="row" id='list-bayar'>
	<table class='table'>
	  <tr>
	    <th>ID</th>
	    <th>No. Kontrak</th>
	    <th>JUMLAH</th>
	    <th>MULAI</th>
	    <th>HINGGA</th>
	  </tr>
	 
<?php
require("./lib/class.bayar.inc.php");
$byr = new payment();
$byr->listPayment(0);
?>
	</table>
</div>





<script>
$('document').ready(function(){
	$('#kontraktor').keyup(function(){
		$('#list-bayar').hide();
		var nama = $('#kontraktor').val();
		
		if(nama.length == 0 ){
			$('#datakontrak').hide();
			$('#list-bayar').show();
		}
		
		$.ajax({url: 'ajax/seekKontrak.php?np='+$('#kontraktor').val(),
				success:function(temuan){
					$('#datakontrak').html(temuan);
					}
				});
	});
});
</script>
