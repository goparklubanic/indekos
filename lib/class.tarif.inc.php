<?php
require("class.crud.inc.php");
class tarif extends dbcrud
{
	function listTarif($limit=0)
	{
		$sql = "SELECT * FROM kelasTarif ORDER BY namaKelas LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			echo "
			<tr>
			   <td>".$r['namaKelas']."</td>
			   <td class='alg-r'>".$this->numfor($r['tarif'])."</td>
			   <td width='300'>
			     <a href='./?menu=modify&data=tarif&id=".$r['id']."'>Edit</a>
			     <a href=#>Hapus</a>
			     <a href='./?menu=kamar&km=".$r['id']."'>Daftar Kamar</a>
			   </td>
			</tr>
			";
		}
	}
}
?>
 
