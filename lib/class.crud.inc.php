<?php
define('rows',12);
class dbcrud
{
   function transact($sql,$data=array()){
	   include('koneksi.inc.php');
	   $tqry=$conn->prepare($sql);
	   $tqry->execute($data);
	   return($tqry);
   }
   
   function columnSet($sets){
	   
	   $cols = explode(",",$sets);
	   $noc = count($cols);
	   
	   $colset = '';
	   for($i = 0 ; $i < $noc ; $i ++){
		   if($i < ($noc -1)){
			   $colset.=$cols[$i]." = ?, ";
		   }else{
			   $colset.=$cols[$i]." = ?";
		   }
	   }
	   
	   return($colset);
   }
   
   
   function insert($table,$sets,$data){
	   $cols = $this->columnSet($sets);
	   $sql = "INSERT INTO $table SET $cols";
	   $qry = $this->transact($sql,$data);
	   $qry = null;
   }
   
   function update($table,$sets,$data,$key){
	   $cols = $this->columnSet($sets);
	   $sql = "UPDATE $table SET $cols 
			   WHERE $key = ?";
	   //echo $sql;
	   $qry = $this->transact($sql,$data);
	   $qry = null;
   }
   
   function delete($table,$key,$data){
	   $sql = "DELETE FROM $table WHERE $key = ?";
	   $qry = $this->transact($sql,array($data));
	   $qry = null;
   }
   
   function select($cols,$table,$key,$start=0){
	   $sql = "SELECT $cols FROM $table
			   ORDER BY $key LIMIT $start,".rows;
	   $qry = $this->transact($sql);
	   $returnData = array();
	   while($rs = $qry->fetch()){
		   //$cp = $qry->getColumnMeta($c);
		   //print_r($cp);
		   array_push($returnData,$rs);
	   }
	   return($returnData);
	   //$this->tablelize($returnData);
	   $qry = null;
   }
   
   function pickup($cols,$table,$key,$data){
	   $sql = "SELECT $cols FROM $table
			   WHERE $key = ? LIMIT 1";
	   $qry = $this->transact($sql,$data);
	   // echo $sql;
	   $rs = $qry->fetch();
	   return($rs);
	   $qry = null;
   }
   
   function pickup2($cols,$table,$keysets,$order=''){
	   if($order == ''){
			$sql = "SELECT $cols FROM $table
					WHERE $keysets LIMIT ".rows;
		}else{
			$sql = "SELECT $cols FROM $table 
					WHERE $keysets ORDER BY $order";
				
		}
	   $qry = $this->transact($sql);
	   $data = array();
	   while($rs = $qry->fetch()){
		   array_push($data,$rs);
	   }
	   return($data);
	   $qry = null;
   }
   
   function tablelize($rs){
	  for($row = 0 ; $row < count($rs) ; $row++){
		echo "<tr>";
		foreach($rs[$row] AS $el=>$va){
		  echo "<td>".$va."-$j</td>";
		}
	    echo "</tr>";
	  }	   
   }
   

   function columnNames($table){
	   include('koneksi.inc.php');
	   $sql = "SELECT * FROM $table LIMIT 1";
	   $qry = $conn->prepare($sql);
	   $qry->execute();
	   $col = $qry->columnCount();
	   $cols = '';
	   for($c = 0 ; $c < $col ; $c++){
		   $cmt = $qry->getColumnMeta($c);
		   $cnm = $cmt['name'];
		   $cols.=$cnm.',';
	   }
	   return $cols;
	   $qry = null;
   }
   
   function tanggalTerbaca($tgl)
   {
	   list($y,$m,$d)=explode('-',$tgl);
	   switch($m){
		   case '01': $b='Januari'; break;
		   case '02': $b='Februari'; break;
		   case '03': $b='Maret'; break;
		   case '04': $b='April'; break;
		   case '05': $b='Mei'; break;
		   case '06': $b='Juni'; break;
		   case '07': $b='Juli'; break;
		   case '08': $b='Agustus'; break;
		   case '09': $b='September'; break;
		   case '10': $b='Oktober'; break;
		   case '11': $b='Nopember'; break;
		   case '12': $b='Desember'; break;
	   }
	   
	   return($d.' '. $b.' '.$y);
   }
   
   function numfor($num){
	   return number_format($num,2,',','.');
   }
   
   function lz($digit,$num){
	   return sprintf("%0".$digit."d",$num);
   }
   
   function addBtn($data,$label){
	   echo "
	   <div class='addBar'>
	     <a class='addBtn' href='./?menu=form&data=".$data."'>+ ".$label."</a>
	   </div>
	   ";
   }
   
   function passedVariables($post){
		$data = "";
		foreach($post AS $q=>$a){
			$data.="\$_POST['".$q."'],";
		}
		echo $data;
	}
}


?>
