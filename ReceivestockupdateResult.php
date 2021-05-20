<?php
  include_once('dbconn.php');

   $receiveid = $_POST["receiveid"];
   $receivedate = $_POST["receivedate"];
   $receivestockid = $_POST["receivestockid"];
   $restockamount = $_POST["restockamount"];
   $shelflife = $_POST["shelflife"];
  
 
   
	$sql ="UPDATE receiveTBL SET receivedate= '".$receivedate."', 
	restockamount='".$restockamount."', shelflife='".$shelflife."'
	WHERE receiveid ='".$receiveid."'";
   
   
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 입고 정보 수정 결과 </h1>";
   if($ret) {
	    //echo "<script>alert(\"데이터가 성공적으로 입력됨.\"); history.back()</script>";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	
   } 
   mysqli_close($con);
   
   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a><br> ";
   echo "<br> <a href='receivestocklist.php'> <--이전 화면</a> ";
?>
