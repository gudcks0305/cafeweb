<?php
  include_once('dbconn.php');
   $sql ="SELECT * FROM stockbasicTBL WHERE stockid='".$_GET['0']."'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['0']." 아이디의 회원이 없음!!!"."<br>";
		   echo "<br> <a href='main.html'> <--초기 화면</a> ";
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
   
   $stockid = $row['0'];
   $stockname = $row["1"];
   $stocktype = $row["2"];
   $stockKeeptype = $row["3"];
   $stockableday = $row["4"];
   $stockbasicunit = $row["5"];
   $stockapp = $row["6"];   
     
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

        <div class="bg">
            <div class="slogan">
                <h1> 재고 기본정보수정</h1>
				<FORM METHOD="post"  ACTION="stockbasicUpdateresult.php">
					<table>
					<tr>
					<td>재고번호<수정불가> : </td>
						<td><INPUT TYPE ="text" NAME="stockid"  VALUE=<?php echo $stockid ?> READONLY > </td>
					</tr>
					<tr>
						<td>재고이름 :</td> 
						<td><INPUT TYPE ="text" NAME="stockname" VALUE=<?php echo $stockname ?>> </td>
					</tr>
					<tr>
						<td>재고유형 : </td>
						<td><INPUT TYPE ="text" NAME="stocktype"  VALUE=<?php echo $stocktype ?>> </td>
					</tr>
					<tr>
						<td>재고보관유형 :</td>
						<td><INPUT TYPE ="text" NAME="stockKeeptype"  VALUE=<?php echo $stockKeeptype ?>> </td>
					</tr>
					<tr>
						<td>사용가능 일수 :</td>
						<td><INPUT TYPE ="number" NAME="stockableday"  VALUE=<?php echo $stockableday ?>> </td>
					</tr>
					<tr>
						<td>사용단위 :</td>
						<td><INPUT TYPE ="text" NAME="stockbasicunit"  VALUE=<?php echo $stockbasicunit ?>></td>
					</tr>
					<tr>
						<td>적정재고량 :</td> 
						<td><INPUT TYPE ="number" NAME="stockapp"  VALUE=<?php echo $stockapp ?>></td>
					</tr><br>
					
					<tr>
						<td></td>
						<td><INPUT TYPE="submit"  VALUE="submit"></td></tr>
					</table>
				</FORM>

            </div>
        </div>

</BODY>
</HTML>