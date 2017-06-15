<?php
require("class.crud.inc.php");
class kamar extends dbcrud
{
	function listKamar($limit=0)
	{
		$sql = "SELECT * FROM viewKamar ORDER BY kodeKamar LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			echo "
			<tr>
			   <td>".$r['kodeKamar']."</td>
			   <td>".$r['namaGedung']." ".$this->lz(3,$r['nomorKamar'])."</td>
			   <td width='200' class='alg-r'>".$r['dayaTampung']." Orang</td>
			   <td>".$r['namaKelas']."</td>
			   <td class='alg-r'><span=class='currency'>IDR</span> ".$this->numfor($r['tarif'])."</td>
			   <td>
				  <a href='./?menu=modify&data=kamar&id=".$r['kodeKamar']."'>Edit</a>
				  Hapus
			   </td>
			</tr>
			";
		}
	}
	
	
	
	function kamarGedung($kdGedung)
	{
		$sql = "SELECT * FROM viewKamar  
				WHERE kodeKamar LIKE '$kdGedung%' 
				ORDER BY kodeKamar";
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			
			echo "			
			<tr>
			   <td>".$r['kodeKamar']."</td>
			   <td>".$r['namaGedung']." ".$this->lz(3,$r['nomorKamar'])."</td>
			   <td width='200' class='alg-r'>".$r['dayaTampung']." Orang</td>
			   <td>".$r['namaKelas']."</td>
			   <td class='alg-r'><span=class='currency'>IDR</span> ".$this->numfor($r['tarif'])."</td>
			   <td>
				  <a href='./?menu=modify&data=kamar&id=".$r['kodeKamar']."'>Edit</a>
				  Hapus
			   </td>
			</tr>
			";
		}
	}
	
	function kamarKelas($kelas,$limit=0)
	{
		$kk = $this->pickup('namaKelas','kelasTarif','id',array($kelas));
		$sql = "SELECT * FROM viewKamar  
				WHERE namaKelas = '".$kk['namaKelas']."'
				ORDER BY kodeKamar
				LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			
			echo "		
			<tr>
			   <td>".$r['kodeKamar']."</td>
			   <td>".$r['namaGedung']." ".$this->lz(3,$r['nomorKamar'])."</td>
			   <td width='200' class='alg-r'>".$r['dayaTampung']." Orang</td>
			   <td>".$r['namaKelas']."</td>
			   <td class='alg-r'><span=class='currency'>IDR</span> ".$this->numfor($r['tarif'])."</td>
			   <td>
				  <a href='./?menu=modify&data=kamar&id=".$r['kodeKamar']."'>Edit</a>
				  Hapus
			   </td>
			</tr>
			";
		}
	}
	
	
	function optGedung(){
		$sql = "SELECT kodeGedung,namaGedung,alamat
				FROM gedung ORDER BY namaGedung";
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			echo "
			<option value='".$r['kodeGedung']."'>".$r['namaGedung'].", ".$r['alamat']."</option>
			";
		}
	}
	
	function optKamar(){
		$sql = "SELECT *
				FROM kelasTarif ORDER BY namaKelas";
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			echo "
			<option value='".$r['id']."'>".$r['namaKelas'].", - IDR ".$this->numfor($r['tarif'])."</option>
			";
		}
	}
	
	function tambahKamar($kdGedung){
		$sql = "UPDATE gedung SET jmKamar = jmKamar + 1 
				WHERE kodeGedung = '$kdGedung'";
		$qry = $this->transact($sql);		
		$ary = null;
	}
	
	function kokam($gd,$km){
		return($gd.sprintf("%03d",$km));
	}
}
?>
 
