<?php
	include_once('dbconn.php');
	$sql= " INSERT INTO overshelfstock (stockid,time,stockamount)
			select stockid,curdate(),stockamount FROM stocktbl
			where stockid =(select stockid from stocktbl where stockshelflife<curdate())
			";
	$sql2="delete from stocktbl
			where stockshelflife<curdate();";
	$ret = mysqli_query($con, $sql);
	$ret2 = mysqli_query($con, $sql2);
 
   
	if($ret) {
	 
	}
	else {
		echo "데이터 입력 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	} 
	if($ret2) {
	 
	}
	else {
		echo "데이터 입력 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	} 
   
?>