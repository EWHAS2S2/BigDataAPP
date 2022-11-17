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

                                    <form action='SearchMovieTitleResult.php' method='post' >
                                        <h2>Searching Movie Title</h2>
                                        <div class="row gtr-uniform">
                                        <div class="col-6 col-12-xsmall">
                                            <input type="text" name="searchword"> 
                                        
                                        </div>
                                        <div class="col-6 col-12-xsmall">
                 
                                            <input type="submit" value="search">
                                        </div>
                                        </div>

                                        <br>  
                                    </form>			
								</section>

                                <section>
                                    <form action="InsertMovie.php" method="post">
                                        <h2>Insert Movie</h2>
                                        <div class="row gtr-uniform">
                                        <div class="col-6 col-12-xsmall">
                                            movie_id
                                            <input type="text" name="imovie_id"> 
                                            title
                                            <input type="text" name="ititle">
                                            vote_averag
                                            <input type="text" name="ivote_average">
                                            popularity
                                            <input type="text" name="ipopularity">
                                            release_date (ex:2022-11-12)
                                            <input type="text" name="irelease_date">
                                            <br><input type="submit" value="insert">
                                        </div>
                                        </div>
                                        <br>  
                                    </form>
                                </section>

                                <section>
                                    <form action="DeleteMovie.php" method="post">
                                        <h2>Delete Movie</h2>
                                        movie_id
                                        <div class="row gtr-uniform">
                                        <div class="col-6 col-12-xsmall">
                                            <input type="text" name="dmovie_id"> 
                                        </div>
                                        <div class="col-6 col-12-xsmall">
                                            <input type="submit" value="delete">
                                        </div>
                                        </div>
                                        <br>  
                                    </form>
                                </section>

                                <section>
                                    <form action="UpdateMovie.php" method="post">
                                        <h2>Update Movie</h2>
                                        <div class="row gtr-uniform">
                                        <div class="col-6 col-12-xsmall">
                                            movie_id
                                            <input type="text" name="umovie_id"> 
                                            title
                                            <input type="text" name="utitle">
                                            vote_averag
                                            <input type="text" name="uvote_average">
                                            popularity
                                            <input type="text" name="upopularity">
                                            release_date (ex:2022-11-12)
                                            <input type="text" name="urelease_date">
                                            <br><input type="submit" value="update">
                                        </div>
                                        </div>
                                        <br>  
                                    </form>
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
										<li><a href="vote_avg.php">vote_avg</a></li>
                                        <li><a href="review_list.php">Review</a></li>
                                        <li><a href="update_accounts.php">Accounts</a></li>
                                        <li><a href="index.php">Board</a></li>
                                        <li><a href="rankingpage.php">Ranking</a></li>
										<li>
											<span class="opener">User</span>
											<ul>
                                                <li><a href="create_accounts.php">User Create</a></li>
                                                <li><a href="delete_accounts.php">User Delete</a></li>
                                                
												
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