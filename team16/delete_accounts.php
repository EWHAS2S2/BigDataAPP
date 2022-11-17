<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Delete Accounts</title>
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
										<h2>Accounts Delete</h2>
									</header>

									<!-- Content -->
										<p>Are you sure you want to delete the account? Please enter your member ID for verification.</p>
									<form method="post" action="user_delete.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="userid" id="userid" value="" placeholder="user ID" />
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="delete" class="primary" /></li>
												</ul>
											</div>
										</div>
									</form>

									<hr class="major" />


</section></pre>

											</div>
										</div>

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