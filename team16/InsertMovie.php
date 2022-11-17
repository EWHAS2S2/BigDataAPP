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
                                        <h2>Insert Movie Data Result</h2> 
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
										
										$success = true;
										$transcation=mysqli_query( $connect,"START TRANSACTION" );

                                        $sql = "INSERT INTO movie_recommend VALUES ('$_POST[imovie_id]', '$_POST[ititle]', '$_POST[ivote_average]',' $_POST[ipopularity]', '$_POST[irelease_date]') "; // 쿼리
                                        $result = mysqli_query($connect, $sql); // 쿼리 실행
                                        
                                        if ($result) {
                                            echo "success";
                                        } else { 
                                            echo "fail";
                                            echo("Errormessage:". $conn -> error);
											$success = false;
                                        };
										
										if ( $success == true ) {
											$transS=mysqli_query($connect,"COMMIT" );
										} else {
											$transF=mysqli_query($connect,"ROLLBACK" );
										}
										

                                        mysqli_close($connect);
 
                                                
                                        
        
                                            
                                        
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
										<li><a href="#.php">#</a></li>
										<li><a href="#.php">#</a></li>
										<li><a href="#.php">#</a></li>
										<li><a href="#.php">#</a></li>
										<li><a href="#.php">#</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												
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