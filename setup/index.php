<?php
//error_reporting(0);
//$rootDir=$_SERVER['HTTP_HOST'];
if(!isset($_GET['ctn'])){header("location:./?ctn=agenda&pgn=1");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RINA HERBAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/admin.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- skrip tinimce -->
	<script type="text/javascript" src="./tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
		selector: ".tmce",
		height: 400,
		content_css : "css/content.css",
		plugins: [
			"advlist autolink lists link image charmap print preview anchor",
			"searchreplace visualblocks code fullscreen",
			"insertdatetime media table contextmenu paste"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    
	});

	function sc(){
		console.debug(tinyMCE.activeEditor.getContent());
	}
	</script>
	<!-- skrip tinimce -->
</head>
<body style="background-color:#002B3D;">
  <div class="page-header" id="mainPh">
	  <h4>DINAS PARIWISATA DAN KEBUDAYAAN KABUPATEN BANJARNEGARA</h4>
	  <h3>PUSAT INFORMASI PARIWISATA BANJARNEGARA</h3>
  </div>
  <div class="container-fluid" id="mainCon">
	  <div class="row">
		  <!-- left panel -->
		  <div class="col-sm-3" id="lpanel">
		  <?php include "menu.php"; ?>
		  </div>
		  
		  <!-- right panel -->
		  <div class="col-sm-9" id="rpanel">
		    <?php include "content.php"; ?>
		  </div>
	  </div>
  </div>
  <div id="mainFoot">
	  <p>&copy; 2017 Komunitas Linux Banjarnegara</p>
	  <p>Disengkuyung Oleh CV. Citra Agung Banjarnegara</p>
  </div>
</body>
</html>
