<?php
  include_once('dbconn.php');
	

   $stockid = $_POST["stockid"];
   $stockname = $_POST["stockname"];
   $stocktype = $_POST["stocktype"];
   $stockKeeptype = $_POST["stockKeeptype"];
   $stockableday= $_POST["stockableday"];
   $stockbasicunit = $_POST["stockbasicunit"];
   $stockapp = $_POST["stockapp"];   
   
   
   $sql =" INSERT INTO stockbasicTBL VALUES('".$stockid."','".$stockname."','".$stocktype;
   $sql = $sql."','".$stockKeeptype."','".$stockableday."','".$stockbasicunit."','".$stockapp."')";
   
   
   
   /*
   $sql =" INSERT INTO stockbasicTBL (stockid,stockname,stocktype,stocktype,stockKeeptype,stockableday,stockbasicunit,stockapp)
   values('".$stockid."','".$stockname."','". $stocktype."','".$stockKeeptype."','". $stockableday."','" .$stockbasicunit."','".$stockapp.")';";
   */
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 기본재고정보  </h1>";
   if($ret) {
	   echo "<script>alert(\"데이터가 성공적으로 입력됨.\"); history.back()</script>";;
   }
   else {
	   echo "데이터 입력 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a><br> ";
   echo "<br> <a href='stockBasicinput.php'> <--이전 화면</a> ";
   ?>
