<!DOCTYPE HTML>

<html>
	<head>
		<title>Movies</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="MovieTotal.php" class="logo"><strong>Movies App</strong> by S2S2.</a>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Movie DB</h1>
									</header>

									<!-- Content -->

                                    <form>
                                        <h2>Grouping / Average Movie Data Result</h2> 
                                    </form>

                                     <?php 
            $servername = "localhost";
            $user = "team16";
            $password = "team16";
            $dbname = "team16";

            $connect = mysqli_connect($servername, $user, $password, $dbname);
 
            if (!$connect) {
            // die() 함수는 인수로 전달받은 메시지를 출력하고, 현재 실행 중인 PHP 스크립트를 종료시키는 함수입니다.
            die("서버와의 연결 실패! : ".mysqli_connect_error());
            }
 
            //echo "서버와의 연결 성공!"."<br>";

            // 서버 연결 종료 mysqli_close($connect);

            

            $sql = "SELECT genre_id, genre_name FROM genre "; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
          
            echo "All Genres<br>";
                while ($row = mysqli_fetch_assoc($result)) { // 집합에서 하나씩 레코드를 꺼내 연관배열로 저장
                    echo $row['genre_id']." : ".$row['genre_name']."<br>"; // 연관배열 인덱스 접근
                }

                echo "<br>";

                
            $sql = "SELECT movie_id, title, vote_average FROM movie_recommend GROUP BY vote_average HAVING vote_average > 8 "; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
            echo "Movie Average Scope<br>";
                while ($row = mysqli_fetch_assoc($result)) { // 집합에서 하나씩 레코드를 꺼내 연관배열로 저장
                    echo $row['movie_id']." : ".$row['title']." , ".$row['vote_average']."<br>"; // 연관배열 인덱스 접근
                }

            
            $sql = "SELECT avg(budget) AS AVG1 FROM movie_budget"; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
            $one = mysqli_fetch_array($result);
            echo "<br>"."average budget : ".$one['AVG1']."<br>";    
            
            $sql = "SELECT avg(revenue) AS AVG2 FROM movie_budget"; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
            $one = mysqli_fetch_array($result);
            echo "<br>"."average revenue : ".$one['AVG2']."<br><br>";    
            

            $sql = "SELECT title, budget, revenue FROM movie_budget GROUP BY budget, revenue HAVING budget > (select avg(budget) from movie_budget) and revenue > (select avg(revenue) from movie_budget) "; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
            echo " movies whose revenue and budget is higher than average <br>";
                while ($row = mysqli_fetch_assoc($result)) { // 집합에서 하나씩 레코드를 꺼내 연관배열로 저장
                    echo $row['title']." : ".$row['budget']."  ".$row['revenue']."<br>"; // 연관배열 인덱스 접근
                }
            
            

        ?>


										

											
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
                                    <ul>
                                        <li><a href="MovieTotal.php">Homepage</a></li>
                                        <li><a href="avg_grouping.php">avg_grouping</a></li>
                                        <li><a href="review_list.php">Review</a></li>
                                        <li><a href="rankingpage.php">Ranking</a></li>
                                        <li>
                                            <span class="opener">Account</span>
                                            <ul>
                                                <li><a href="create_accounts.php">Create</a></li>
                                                <li><a href="update_accounts.php">Edit</a></li>
                                                <li><a href="delete_accounts.php">Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
								</nav>



							
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>