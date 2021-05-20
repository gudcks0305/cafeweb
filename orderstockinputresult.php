<?php
   include_once('dbconn.php');
	

   $orderid = $_POST["orderid"];
   $orderdate = $_POST["orderdate"];
   $orderstockid = $_POST["orderstockid"];
   $orderstockamount = $_POST["orderstockamount"];
   $orderstockaccountname= $_POST["orderstockaccountname"];
   
   
   $sql ="INSERT INTO ordertbl(orderid,orderdate,orderstockid,orderstockamount,orderaccountname) VALUES('".$orderid."','".$orderdate."','".$orderstockid;
   $sql = $sql."','".$orderstockamount."','".$orderstockaccountname."')";
   
   
   
   /*
   $sql =" INSERT INTO stockbasicTBL (orderid,orderdate,orderstockid,orderstockid,orderstockamount,orderstockaccountname,stockbasicunit,stockapp)
   values('".$orderid."','".$orderdate."','". $orderstockid."','".$orderstockamount."','". $orderstockaccountname."','" .$stockbasicunit."','".$stockapp.")';";
   */
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 발주정보  </h1>";
   if($ret) {
	   echo "<script>alert(\"데이터가 성공적으로 입력됨.\"); history.back()</script>";;
   }
   else {
	   echo "데이터 입력 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a><br> ";
   echo "<br> <a href='orderstockinput.php'> <--이전 화면</a> ";
   ?>
