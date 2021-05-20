<?php
   include_once('dbconn.php');
   
   echo $_GET['2'];
   
   $sql ="SELECT * FROM stocktbl WHERE stockid='".$_GET['0']."' AND stockshelflife='$_GET['2']'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['0']." 일치 창고 재고가 없음!!!"."<br>";
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
  
   $stockid = $_POST['0'];
   $stockamount = $_POST["1"];
   $stockshelflife = $_POST["2"];
   $stockopendate =$_POST["3"];
 
   
     
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

        <div class="bg">
            <div class="slogan">
                <h1> 창고 재고 정보 수정</h1>
				<FORM METHOD="post"  ACTION="receivestockupdateresult.php">
					<table>
					<tr>
					<td>재고번호 : </td>
						<td><INPUT TYPE ="text" NAME="stockid"  value = <?php echo $stockid ?> READONLY > </td>
					</tr>
					
		
					<tr>
						<td>수량:</td>
						<td><INPUT TYPE ="number" NAME="stockamount" value=<?php echo $stockamount ?>> </td>
					</tr>
					<tr>
						<td>유통기한 :</td> 
						<td><INPUT TYPE ="date" NAME="stockshelflife" class ="date" value=<?php echo $stockshelflife ?> READONLY > </td>
					</tr>
					<tr>
							
						<td>개봉일자 :</td> 
						<td><INPUT TYPE ="date" NAME="stockopendate" class ="date" value=<?php echo $stockopendate ?>> </td>
					
						</td>
					</tr>
				
					<tr>
						<td></td>
						<td><INPUT TYPE="submit"  VALUE="수정" ></td></tr>
					</table>
				</FORM>

            </div>
        </div>

</BODY>
</HTML>