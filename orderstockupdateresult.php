<?php
  include_once('dbconn.php');

   $orderid = $_POST["orderid"];
   $orderdate = $_POST["orderdate"];
   $orderstockid = $_POST["orderstockid"];
   $orderstockamount = $_POST["orderstockamount"];
   $orderstockaccountname = $_POST["orderstockaccountname"];
   $orderWhether= $_POST["orderWhether"];
   $bool=0;
   if($orderWhether =="YES"){
	   $bool=1;
   }
   else{
	   $bool =0 ;
   }
   
   $sql ="UPDATE orderTBL SET orderdate= '$orderdate' ,orderstockamount='$orderstockamount', 
   orderaccountname='".$orderstockaccountname."', orderWhether='".$bool."'
   WHERE orderid ='$orderid' AND orderstockid = '$orderstockid'";
   
   
   
   
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 발주 정보 수정 결과 </h1>";
   if($ret) {
	    echo "<script>alert(\"데이터가 성공적으로 입력됨.\"); history.back()</script>";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	
   } 
   mysqli_close($con);
   
   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a><br> ";
   echo "<br> <a href='orderstocklist.php'> <--이전 화면</a> ";
?>
