<?php
require("class.crud.inc.php");
class kontrak extends dbcrud
{
	function listKontrak($limit=0)
	{
		$sql = "SELECT * FROM viewKontrak ORDER BY tgKontrak LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			echo "
			<tr>
			   <td><a href='data-kontrak.php?id=".$r['idKontrak']."'>".$r['idKontrak']."</a></td>
			   <td>".$this->tanggalTerbaca($r['tgKontrak'])."</td>
			   <td>".$r['namaPenghuni']."<br/>[ ".$r['nomorKTP']." ]</td>
			   <td>".$r['namaGedung']."</td>
			   <td>".$r['nomorKamar']."</td>
			   <td>".$this->tanggalTerbaca($r['periodTill'])."</td>
			</tr>
			";
		}
	}
}
?>
 
