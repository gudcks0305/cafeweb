<?php
	include_once('dbconn.php');

	$sql ="SELECT *,stockbasicTBL.stockbasicunit FROM receiveTBL,stockbasicTBL where receiveTBL.receivestockid = stockbasicTBL.stockid";
	 
	$ret = mysqli_query($con, $sql);   
		if($ret) {
		   echo mysqli_num_rows($ret), "건이 조회됨..<br><br>";
		   $count = mysqli_num_rows($ret);
		}
		else {
		   echo "receiveTBL 데이터 조회 실패!!!"."<br>";
		   echo "실패 원인 :".mysqli_error($con);
		   exit();
		} 
	   
		   echo "<h1> 입고내역 조회 </h1>";
		   echo "<TABLE border=1>";
		   echo "<TR>";
		   echo "<TH>입고번호</TH><TH>입고날짜</TH><TH>입고 재고번호</TH><TH>입고 수량</TH><TH>단위</TH><TH>유통기한</TH>";
		   echo "<TH>수정</TH><TH>삭제</TH>";
		   echo "</TR>";
		   
	   while($row = mysqli_fetch_array($ret)) {
		  echo "<TR>";
		  echo "<TD>", $row['0'], "</TD>";//receiveid
		  echo "<TD>", $row['1'], "</TD>";//receivedate
		  echo "<TD>", $row['2'], "</TD>";//receivestockid
		  echo "<TD>", $row['3'], "</TD>";//restockamount
		  echo "<TD>", $row['stockbasicunit'], "</TD>";//사용단위
		  echo "<TD>", $row['4'], "</TD>";//shelflife
		 
	
		 
		  echo "<TD>", "<a href='Receivestockupdate.php?0=", $row['0'], "'>수정</a></TD>";
		  echo "<TD>", "<a href='delete.php?stockid=", $row['stockid'], "'>삭제</a></TD>";
		  echo "</TR>";	  
	   }   
	   mysqli_close($con);
	   echo "</TABLE>"; 
	    echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a><br> ";
	  

	?>