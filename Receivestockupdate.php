<?php
   include_once('dbconn.php');
   $sql ="SELECT * FROM receiveTBL WHERE receiveid='".$_GET['0']."'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['0']." 일치 입고가 없음!!!"."<br>";
		   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "데이터 조회 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   echo "<br> <a href='cafeprojectmain.html'> <--초기 화면</a> ";
	   exit();
   }   
   $row = mysqli_fetch_array($ret);
   
   $receiveid = $row['0'];
   $receivedate = $row["1"];
   $receivestockid = $row["2"];
   $restockamount = $row["3"];
   $shelflife = $row["4"];
   
     
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

        <div class="bg">
            <div class="slogan">
                <h1> 입고내역 수정 및 창고 저장</h1>
				<FORM METHOD="post"  ACTION="receivestockupdateresult.php">
					<table>
					<tr>
					<td>입고번호 : </td>
						<td><INPUT TYPE ="text" NAME="receiveid"  value = <?php echo $receiveid ?> READONLY > </td>
					</tr>
					<tr>
						<td>입고날짜 :</td> 
						<td><INPUT TYPE ="date" NAME="receivedate" class ="date" > </td>
					</tr>
					
					<tr>
						<td>입고 재고번호 :</td> 
						<td><INPUT TYPE ="text" name ="receivestockid" value = <?php echo $receivestockid ?> READONLY>
						
						</td>
					</tr>
					<tr>
						<td>입고 수량:</td>
						<td><INPUT TYPE ="number" NAME="restockamount" value=<?php echo $restockamount ?>> </td>
					</tr>
					
					<tr>
							
						<td>유통기한 :</td> 
						<td><INPUT TYPE ="date" NAME="shelflife" class ="date" > </td>
					
						</td>
					</tr>
				
					<tr>
						<td></td>
						<td><INPUT TYPE="submit"  VALUE="수정"></td></tr>
					</table>
				</FORM>

            </div>
        </div>

</BODY>
</HTML>