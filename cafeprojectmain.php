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
                background-color: rgba(0,0,0, 0.5);
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
                font-family: 'Book Antiqua', cursive;
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
                border:1px;
                color: black;
                background-color: #ddd; /* #dddddd */
                padding: 10px 25px;
                cursor: pointer;
                
                
            }
            .slogan button:hover { /* 버턴위에 마우스를 올렸을 때 */
                background-color: orangered;
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
                background-color: white;
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
			.num{
				color : red;
			}
        </style>
    </head>
    <body>
        <h1 class ="t">Stock Managemt</h1>
        <h4 class ="sign">20171910 유형찬</h4>
        <ul>
            <li><a href="cafeprojectmain.php" class="active"><i class="material-icons">language</i>Home</a></li>
            <li class="dropdown"><a href="javascript:void(0)">재고검색</a>
                <div class="dropdown-content">
                    <a href="stockbasicinput.php">재고 기본 정보추가</a>
                    <a href="stockbasiclist.php">재고 정보 및 발주</a>
                    <a href="stocklist.php">창고 재고조회</a>
                    <a href="receiveStockList.php">입고</a>
                </div>
            </li>
            <li class="dropdown"><a href="javascript:void(0)">출고</a>
                <div class="dropdown-content">
                    <a href="#">판매제품 정보추가</a>
					<a href="productlist.php">판매제품 정보조회</a>
					<a href="orderproductinput.php">주문</a>
                    <a href="#">주문내역</a>
                    <a href="#">주문취소내역</a>
                </div>
            </li>
            <li class="dropdown"><a href="javascript:void(0)">발주</a>
                <div class="dropdown-content">
                    <a href="orderstocklist.php">발주내역</a>
                    
                </div>
            </li>

            <li class="dropdown"><a href="javascript:void(0)">추가기능</a>
                <div class="dropdown-content">
                    <a href="overstocklist.php">유통기한 만료 재고</a>
                    <a href="#">사용기한 초과 재고</a>
                    <a href="ShortageStocklist.php" class = "num">재고부족 알림 <?php include_once('dbconn.php');

					$sql ="SELECT o.stockid , s.stockname , s.stockapp , sum(o.stockamount) , s.stockbasicunit
						FROM stocktbl o , stockbasictbl s
						where (o.stockid = s.stockid AND s.stockapp >=
						(select sum(o.stockamount)
							from stocktbl
							where o.stockid = s.stockid))
						
						Group by stockid
						";
				 
					$sql1 ="SELECT stockid ,stockname ,stockapp ,stockbasicunit
							FROM stockbasictbl 
							where NOT exists (select * from stocktbl where stockid = stockbasictbl.stockid)
					";
					
				   $ret = mysqli_query($con, $sql); 
				   $ret1 = mysqli_query($con, $sql1);
					$count=0;
					
					if($ret) {
					   $count = mysqli_num_rows($ret);
					}
					else {
					   echo "OVER SHELF STOCK TBL 데이터 조회 실패!!!"."<br>";
					   echo "실패 원인 :".mysqli_error($con);
					   exit();
					}
					
					if($ret1) {
					   
					   $count = mysqli_num_rows($ret1)+$count;
					   ?>  
					   (<?=$count?>)
					   <?php
					}
					?></a>
                    <a href="orderaccountinput.php">거래처 정보입력</a>
                    <a href="orderaccountlist.php">거래처 정보조회</a>

                </div>
            </li>
            <li><a href="#">히스토리</a></li>
           
        </ul>

      

        <div class="bg">
            <div class="slogan">
                <h1> Daejin University</h1>
                <h3>Industrial System Engineering</h3>
                <p>Database Hands-on class</p>
            </div>
        </div>

        <script>
            function openNav() {
                document.getElementById("myNav").style.display = "block";
            }
            function closeNav() {
                document.getElementById("myNav").style.display = "none";
            }
        </script>
    </body>
</html>




