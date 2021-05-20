<!doctype html>
<html>

<head>
	<title>Stock ManageMent</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            body {
                height: 100vh; /* viewport height : 뷰포트는 시각적으로 보이는 윈도우 영역 */
                margin: 0;
            }
            .bg {
                background-image: url("coffee1\ -\ 복사본.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                height: 100%;  /* 부모의 높이 크기에 100% 의미 */
            }
             .slogan {
                color: white;
                background-color: rgba(0,0,0, 0.8);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding-left: 60px;
                padding-right: 60px;
                text-align: center;
            }
            h1 {
                font-family: 'Book Antiqua', monospace;
                font-size: 300%;
                font-style: italic;
                margin-bottom: 0;
            }
            h3 {
                font-size: 200%;
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 10px 0;
                margin-top: 0;
            }
            p {
                color: coral;
                font-size: 130%;
            }
            .slogan button {
                border: none;
                color: black;
                background-color: #ddd; /* #dddddd */
                padding: 10px 25px;
                cursor: pointer;
                
                
            }
            .slogan button:hover { /* 버턴위에 마우스를 올렸을 때 */
                background-color: orangered;
                color: white;
            }
            .topnav {
                background-color: #333;
                overflow: hidden;
            }
            .topnav a {
                text-decoration: none; 
                color: white;
                font-size: 17px;
                padding: 14px 16px;
                float: left;
            }
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }
            .topnav a.active {
                background-color: teal;
                color: white;
            }
            ul {
                list-style-type: none;
                background-color: rgba(0,0,0, 0.8);
                overflow: hidden;
                margin: 0;
                padding: 0;
            }
            li {
                float: left;
            }
            li a {
                text-decoration: none;
                display: block;
                padding: 14px 16px;
                font-size: 17px;
                color: white;
            }
            li a:hover {
                background-color: gray;
            }
            li a.active {
                background-color: rgba(252,221,190);
                color: black;
            }
            li.dropdown {
                display: block;
            }
            .dropdown-content {
                position: absolute; /* 현재 흐름에서 제거되어 위치가 이동될 수 있음 */
                background-color:white;
                min-width: 160px;
                z-index: 1;
                display: none; /* 사라지게 만든다 */
            }
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }
            .dropdown:hover .dropdown-content { /* .dropdown위로 마우스 올렸을 때 .dropdown-content */
                display: block;
            }
            .dropdown-content a:hover {
                background-color: burlywood;
            }
       
            
            .t{
              background-color:rgba(252,221,175,0.5);
              text-align: center;
              margin: 0;
              padding: 0;
            }
            .sign{
                position:absolute;
                top: 15px;
                right: 30px;
                font-family:Verdana, Geneva, Tahoma, sans-serif
            }
			.dropdown1{
				width : 175px;
			}
			.date{
				width:175px;
			}
        </style>
</head>

<body>
		<h1 class ="t">Stock Managemt</h1>
        <h4 class ="sign">20171910 유형찬</h4>
        <ul>
            <li><a href="cafeprojectmain.html" class="active"><i class="material-icons">language</i>Home</a></li>
            <li class="dropdown"><a href="javascript:void(0)">재고검색</a>
                <div class="dropdown-content">
                    <a href="stockbasicinput.php">재고 기본 정보추가</a>
                    <a href="stockbasiclist.php">재고 기본정보조회</a>
                    <a href="#">입고</a>
                </div>
            </li>
            <li class="dropdown"><a href="javascript:void(0)">출고</a>
                <div class="dropdown-content">
                    <a href="#">판매제품 정보추가</a>
                    <a href="#">주문내역</a>
                    <a href="#">주문취소내역</a>
                </div>
            </li>
            <li class="dropdown"><a href="javascript:void(0)">발주</a>
                <div class="dropdown-content">
                    <a href="orderstockinput.php">발주 신청</a>
                    <a href="#">발주내역</a>
                    <a href="#">발주수정</a>
                    <a href="#">발주-입고처리</a>
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)">추가기능</a>
                <div class="dropdown-content">
                    <a href="#">유통기한 만료 재고</a>
                    <a href="#">사용기한 초과 재고</a>
                    <a href="#">재고부족 알림</a>
                    <a href="orderaccountinput.php">거래처 정보입력</a>
                    <a href="orderaccountlist.php">거래처 정보조회</a>

                </div>
            </li>
            <li><a href="#">히스토리</a></li>
           
        </ul>
		
		
		
	<div class="bg">
            <div class="slogan">
                <h1> 발주 정보등록</h1>
				<FORM METHOD="post"  ACTION="orderstockinputresult.php">
				<?php include_once('dbconn.php'); ?>
					<table>
					<tr>
					<td>발주번호 : </td>
						<td><INPUT TYPE ="text" NAME="orderid" > </td>
					</tr>
					<tr>
						<td>발주날짜 :</td> 
						<td>
							<?= date('Y-m-d') ?>
							<INPUT TYPE ="text" NAME="orderdate" class ="date" value=<?=  date('Y-m-d')?> hidden > </td>
					</tr>
					
					<tr>
						<td>발주 재고번호 :</td> 
						<td>
							<INPUT TYPE ="text" NAME="orderstockid" value= <?php $sid = $_GET['3']; echo $sid; ?> hidden>
							<?= $sid?>
							
							
							
						</td>
					</tr>
					<tr>
						<td>발주 재고명 :</td> 
						<td>
							
							<?= $_GET['stockname']?>
							
							
							
						</td>
					</tr>
					
					<tr>
						<td>발주 수량:</td>
						<td><INPUT TYPE ="number" NAME="orderstockamount"> </td>
					</tr>
					
					<tr>
						<td>거래처 : </td>	
						<td><select class ="dropdown1" name ="orderstockaccountname">
							<option>선택</option>
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
						<td></td>
						<td><INPUT TYPE="submit"  VALUE="등록"></td></tr>
						
					</table>
				</FORM>
				<button><a href = "stockbasiclist.php">이전</a></button>

            </div>
        </div>
	
	
		<script>
			
		</script>
</body>

</html>
<?php mysqli_close($con); ?>