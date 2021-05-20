<?php
# cart 테이블에 레코드 추가하기

include_once('dbconn.php');


$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$amount = $_GET['amount'];
$sumprice = $amount *$productPrice;

$sql = "INSERT INTO orderproducttbl(productname,amount,sumprice) value('$productName',$amount, $sumprice)";
$ret = mysqli_query($con, $sql); 

if($ret) {
	echo "선택한 커피를 주문 했습니다.<br>";
	echo "<a href='cafeprojectmain.php'>Cafe main</a>";
}
else echo " 주문 실패하였습니다. ".$con->error;	

$sql = "select  count(*)
        from producttbl p , orderproducttbl o 
		where p.productname = o.productname  AND  o.productname = '$productName'";
$retnum = mysqli_query($con, $sql); 
$cnt=1;
$num = mysqli_num_rows($retnum);

while($cnt== $num){
	$sql = "WITH orderproductTemp AS
		 (
		  SELECT
		  ROW_NUMBER() OVER(ORDER BY producttbl_StockUse_ID ASC) AS 'No',
		  o.amount , producttbl_StockUse_am , producttbl_StockUse_ID
		  from producttbl p , orderproducttbl o
		  where p.productname = o.productname  AND  o.productname = '$productName'
		 )
		update stocktbl set stockamount = stockamount - (SELECT  amount
												FROM orderproductTemp 
												WHERE No = '$cnt' ) * 
												(SELECT producttbl_StockUse_am
												FROM orderproductTemp 
												WHERE No = '$cnt' ) 
		where stockid = (SELECT producttbl_StockUse_ID
				 FROM orderproductTemp 
				WHERE No = '$cnt' 
		) 
		order by stockshelflife desc
		limit 1;  
		";
$ret = mysqli_query($con, $sql); 
$cnt++;
}

if($ret) {
	echo "선택한 커피를 주문 했습니다.<br>";
	echo "<a href='cafeprojectmain.php'>Cafe main</a>";
}
else echo " 주문 실패하였습니다. ".$con->error;	

?>