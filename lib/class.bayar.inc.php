<?php
require("class.crud.inc.php");
class payment extends dbcrud
{
	function listPayment($limit=0)
	{
		$sql = "SELECT * FROM payment ORDER BY idPayment LIMIT $limit,".rows;
		$qry = $this->transact($sql);
		while($r = $qry->fetch()){
			echo "
			<tr>
			  <td>".$r['idPayment']."</td>
			  <td>".$r['idKontrak']."</td>
			  <td class='alg-r'>".$this->numfor($r['nominal'])."</td>
			  <td>".$this->tanggalTerbaca($r['paymentPeriodFrom'])."</td>
			  <td>".$this->tanggalTerbaca($r['paymentPeriodTill'])."</td>
			</tr>
			";
		}
	}
	
	
}
?>
 
