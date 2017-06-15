<?php
require("class.crud.inc.php");
class gedung extends dbcrud
{
	function listGedung($limit=0)
	{
		$sql = "SELECT * FROM gedung ORDER BY namaGedung LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			$occupancies = $this->occulevel($r['kodeGedung']);
			echo "
			<tr>
			   <td>".$r['namaGedung']."</td>
			   <td>".$r['alamat']."</td>
			   <td class='alg-r'>".$r['telp']."</td>
			   <td class='alg-r'>".$r['jmKamar']." Unit</td>
			   <td class='alg-r'>".$occupancies."</td>
			   <td>
			     <a href='./?menu=modify&data=gedung&id=".$r['kodeGedung']."'>Edit</a>
			     <a href='./?menu=kamar&id=".$r['kodeGedung']."'>Kamar</a>
			     <a href='./?menu=klkmr&kg=".$r['kodeGedung']."'>Tarif</a>
			     Hapus
			   </td>
			</tr>
			";
		}
	}
	
	function kamarGdBaru($kdGdg,$jkmr){
		
		for($i = 0 ; $i < $jkmr ; $i++){
		
			$nk = $i + 1;
			$kdk = $kdGdg.sprintf("%03d",$nk);
			$tabl = 'kamar';
			$sets = 'kodeKamar,kodeGedung,nomorKamar,dayaTampung,kelasTarif';
			$data = array($kdk,$kdGdg,$nk,2,1);
			
			$this->insert('kamar',$sets,$data);
		
		}
		
	}
	
	
	function occulevel($kdGedung){
		$sql = "SELECT sum(occupancy) tkHunian ,sum(dayaTampung) kapasitas 
				FROM kamar where kodeGedung= ? ";
		$qry = $this->transact($sql,array($kdGedung));
		$r = $qry->fetch();
		return($r['tkHunian'].' / '.$r['kapasitas']);
	}
	
}
?>
