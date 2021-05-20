<?php
   include_once('dbconn.php');
	

   $orderaccoutName = $_POST["orderaccoutName"];
   $orderaccoutTelno = $_POST["orderaccoutTelno"];
   $orderaccountaddress = $_POST["orderaccountaddress"];
   $orderaccountEmaddress = $_POST["orderaccountEmaddress"];
   $orderaccountEmName= $_POST["orderaccountEmName"];
 
   
   $sql =" INSERT INTO orderaccountTBL VALUES('".$orderaccoutName."','".$orderaccoutTelno."','".$orderaccountaddress;
   $sql = $sql."','".$orderaccountEmaddress."','".$orderaccountEmName."')";
   
   
   
   /*
   $sql =" INSERT INTO stockbasicTBL (orderaccoutName,orderaccoutTelno,orderaccountaddress,orderaccountaddress,orderaccountEmaddress,orderaccountEmName,stockbasicunit,stockapp)
   values('".$orderaccoutName."','".$orderaccoutTelno."','". $orderaccountaddress."','".$orderaccountEmaddress."','". $orderaccountEmName."','" .$stockbasicunit."','".$stockapp.")';";
   */
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 거래처 정보  </h1>";
   if($ret) {
	   echo "<script>alert(\"데이터가 성공적으로 입력됨.\"); history.back()</script>"; // 데이터입력후 이전페이지로 돌아가기
	   
   }
   else {
	   echo "데이터 입력 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a><br> ";
   echo "<br> <a href='orderaccountinput.php'> <--이전 화면</a> ";
   ?>
