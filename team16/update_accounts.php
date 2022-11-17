<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Edit Account Setting</title>
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
									<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h2>Edit Account Setting</h2>
									</header>

									<!-- Content -->
                                            <?php
                                                if($_POST != null){
                                                    $user_id = $_POST['id'];
                                                    $password = $_POST['password'];
                                                    $jb_conn = mysqli_connect( 'localhost', 'team16', 'team16', 'team16' );
                                                    $jb_sql = "SELECT user_pw, user_name FROM user WHERE user_id = '$user_id';";
                                                    $jb_result = mysqli_query( $jb_conn, $jb_sql );
                                                    $jb_row = mysqli_fetch_array( $jb_result );
                                                    if(!$jb_result or $jb_row['user_pw']!=$password){
                                                        $_POST = null;
                                                        echo("<script>location.replace('update_accounts.php');</script>");
                                                    }else{
                                                        echo '
                                                        <p>Change your nickname.</p> 
                                                        <form method="post" action="user_update.php">
                                                        <div class="col-7 col-12-xsmall">
                                                            <h3>Nickname</h3>
                                                            <input type="text" name="nickname" id="nickname" value="'.$jb_row['user_name'].'" placeholder="Nickname" />
                                                            <input type="hidden" name="id" id="id" value="'.$user_id.'">
                                                        </div>
                                                        <br>
                                                        <!-- Break -->
                                                        <div class="col-12">
                                                            <ul class="actions">
                                                                <li><input type="submit" value="Save" class="primary" /></li>
                                                            </ul>
                                                        </div>
                                                        ' ;
                                                    }

                                                }else{
                                                    echo '  <p>Enter your ID and password for verification.</p>
                                                            <form method="post" action="update_accounts.php">
                                                            <div class="row gtr-uniform">
                                                                <div class="col-7 col-12-xsmall">
                                                                    <h3>ID</h3>
                                                                    <input type="text" name="id" id="id" value="" placeholder="ID" />
                                                                </div>
                                                                <div class="col-7 col-12-xsmall">
                                                                    <h3>Password</h3>
                                                                    <input type="password" name="password" id="password" value="" placeholder="Password" />
                                                                </div>
                                                                <div class="col-12">
                                                                    <ul class="actions">
                                                                        <li><input type="submit" value="Login" class="primary" /></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                          </form>';
                                                }



                                            ?>


</section></pre>

											</div>
										</div>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="review_list.php">Elements</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Etiam Dolore</a></li>
										<li><a href="#">Adipiscing</a></li>
										<li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Maximus Erat</a></li>
										<li><a href="#">Sapien Mauris</a></li>
										<li><a href="#">Amet Lacinia</a></li>
									</ul>
								</nav>


							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

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