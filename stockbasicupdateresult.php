<?php
   include_once('dbconn.php');
   $stockid = $_POST["stockid"];
   $stockname = $_POST["stockname"];
   $stocktype = $_POST["stocktype"];
   $stockKeeptype = $_POST["stockKeeptype"];
   $stockableday = $_POST["stockableday"];
   $stockbasicunit = $_POST["stockbasicunit"];
   $stockapp = $_POST["stockapp"];   
   
   
   $sql ="UPDATE stockbasicTBL SET stockname= '".$stockname."', stocktype='".$stocktype;
   $sql = $sql."', stockKeeptype='".$stockKeeptype."', stockableday='".$stockableday."', stockbasicunit='".$stockbasicunit;
   $sql = $sql."', stockapp='".$stockapp."'WHERE stockid ='".$stockid."'";
   
   
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 재고 기본 정보 수정 결과 </h1>";
   if($ret) {
	    echo "<script>alert(\"데이터가 성공적으로 수정되었습니다.\"); history.back()</script>";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	
   } 
   mysqli_close($con);
   
   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a><br> ";
   echo "<br> <a href='orderaccountinput.php'> <--이전 화면</a> ";
?>
