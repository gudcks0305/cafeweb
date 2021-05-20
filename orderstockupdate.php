<?php
   include_once('dbconn.php');
   $sql ="SELECT * FROM orderTBL WHERE orderid='".$_GET['0']."'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['0']." 일치 발주가 없음!!!"."<br>";
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
   
   $orderid = $row['0'];
   $orderdate = $row["1"];
   $orderstockid = $row["2"];
   $orderstockamount = $row["3"];
   $orderstockaccountname = $row["4"];
   
     
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

        <div class="bg">
            <div class="slogan">
                <h1> 발주내역 수정</h1>
				<FORM METHOD="post"  ACTION="orderstockupdateresult.php">
					<table>
					<tr>
					<td>발주번호 : </td>
						<td><INPUT TYPE ="text" NAME="orderid"  value = <?php echo $orderid ?> READONLY > </td>
					</tr>
					<tr>
						<td>발주날짜 :</td> 
						<td><INPUT TYPE ="date" NAME="orderdate" class ="date"value = <?php echo $orderdate ?>> </td>
					</tr>
					
					<tr>
						<td>발주 재고번호 :</td> 
						<td><select class ="dropdown1" name ="orderstockid" value = <?php echo $orderstockid ?>>
							<option><?php echo $orderstockid ?></option>
							<?php
								$sql ="select stockid from stockbasicTbl";
								$result = mysqli_query($con,$sql);
								while($row = mysqli_fetch_array($result)){
									echo '<option>'.$row['stockid'].'</option>';
								}
								
							?>
							</select>
						</td>
					</tr>
					<tr>
						<td>발주 수량:</td>
						<td><INPUT TYPE ="number" NAME="orderstockamount" value=<?php echo $orderstockamount ?>> </td>
					</tr>
					
					<tr>
						<td>거래처 : </td>	
						<td><select class ="dropdown1" name ="orderstockaccountname" >
							<option><?php echo $orderstockaccountname ?></option>
							<?php
								
								$sql ="select orderaccountname from orderaccounttbl";
								$result = mysqli_query($con,$sql);
								while($row = mysqli_fetch_array($result)){
									echo '<option>'.$row['orderaccountname'].'</option>';
								}	

							?>
							
							</select>
						</td>
					</tr>
					<tr>
						<td>입고 여부 :</td> 
						<td><select class ="dropdown1" name ="orderWhether">
							<option>YES</option>
							<option>NO</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><INPUT TYPE="submit"  VALUE="수정"></td></tr>
					</table>
				</FORM>
				<button><a href = "orderstocklist.php">이전</a></button>

            </div>
        </div>

</BODY>
</HTML>