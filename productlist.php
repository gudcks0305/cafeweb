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
				border-radius: 2em;
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
			
			img {
                width: 100%;
                height: 400px;
                margin-top: 0;
            }
			.card {
              background: #fff;
              border-radius: 2px;
              display: inline-block;
			  width:1500px;
              height: auto;
              margin: 10px;
              position: relative;
              width: 500px;
                border: 1px solid #999;
            }
            .card-1 {
              box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
              /*transition: all 0.3s cubic-bezier(.25,.8,.25,1);*/
                overflow: hidden;
            }
            .card-1 img {
				
                
                display:block;
				margin:20px;
                width: 50%;
                height: auto;
				float:left;
                transition: .3s transform ease-out;
				
            }
            .card-1:hover img{
              /*box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);*/
              transform: scale(1.15);
            }
            .card-1:hover h3 {
                color: navy;
                text-shadow: 1px 1px 1px darkorange;
                border-bottom: 1px dotted gray;
            }
            .card-1 .text {
                margin-top: 1px;
				
				 
				
            }
			.card-1 .text h5,h4 {
                line-height:0.5em;
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
                    <a href="#">발주 신청</a>
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
            
              

				<?php
					include_once('dbconn.php');
					$sql = "SELECT distinct productid, productName,productPrice, p.photo
							from producttbl p 
							";
					$sql2 = "SELECT productid, productName,productPrice,producttbl_StockUse_Am,producttbl_StockUse_ID ,s.stockname, s.stockbasicunit , p.photo
							from producttbl p , stockbasictbl s
							where p.producttbl_StockUse_ID = s.stockid";
					$result = $con->query($sql);
					$result2 = $con->query($sql2);
					if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
				?>
					<div class="card card-1">
					<img src="<?=$row['photo']?>">
					
						
						
						<div class="text">
						<hr>
						<h4>제품 번호 : <?=$row['productid']?></h5>
						<h4>제품 이름 : <?=$row['productName']?></h5>
						<h4>가격 : <?=$row['productPrice']?></h5>
						
					<?php
					$repid = $row['productid'];
					$result2 = $con->query($sql2);
					while($row = $result2->fetch_assoc()  ) { 
					$repid2 = $row['productid'];
						if($repid == $repid2){
							
					?>		<hr>
							<h5>사용 재료 ID :  <?php echo $row['producttbl_StockUse_ID'];?></h5>
							<h5>사용 재료 명 : <?php echo $row['stockname']; ?></h5>
							<h5>재료 사용량 : <?php echo $row['producttbl_StockUse_Am']." ".$row['stockbasicunit']; ?></h5>
							
					<?php }}?>
						</div>
					</div>
					<?php } // while
					} else echo "등록된 메뉴가 없습니다.";
					mysqli_close($con);
					?>
					
				<div class = "button">
					
					<button type="button" onClick="location.href='cafeprojectmain.html'">메인
				</div>

            
        </div>

       
    </body>
</html>




