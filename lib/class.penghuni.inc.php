<?php
require("class.crud.inc.php");
class penghuni extends dbcrud
{
	function listPenghuni($limit=0)
	{
		$sql = "SELECT * FROM penghuni ORDER BY namaPenghuni LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			echo "
			<tr>
			   <td><a href='./?menu=modify&data=penghuni&id=".$r['nomorKTP']."'>".$r['nomorKTP']."</a></td>
			   <td>".$r['namaPenghuni']."</td>
			   <td>".$r['jenisKelamin']."</td>
			   <td>".$r['alamatAsal']."</td>
			   <td>".$r['nomorHP']."</td>
			</tr>
			";
		}
	}
	
	function occupdate($kdKamar){
		$sql = "UPDATE kamar SET occupancy = occupancy + 1 
				WHERE kodeKamar = ? LIMIT 1";
		$qry =  $this->transact($sql,array($kdKamar));
		$qry = null;
	}
}
?>
 
