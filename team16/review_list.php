<?php
    if(isset($_GET["page"]))
        if($_GET["page"]<0)
            $page = 1;
        else
            $page = $_GET["page"];
    else
        $page = 1;
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Movie Review</title>
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
										<h1>Review</h1>
										<div class="col-6 col-12-small">
											<ul class="actions stacked" align="right">
												<li><a href="write.php" class="button">write</a></li>
											</ul>
										</div>
									</header>

									<!-- Box -->
									<div class="box alt">
                                        <?php
                                            $jb_conn = mysqli_connect( 'localhost', 'team16', 'team16', 'team16' );
                                            $jb_sql = "SELECT * FROM review;";
                                            $jb_result = mysqli_query( $jb_conn, $jb_sql );
                                            $total_record = mysqli_num_rows($jb_result);
                                            $list = 5;
                                            $block_cnt = 5;
                                            $block_num = ceil($page / $block_cnt);
                                            $block_start = (($block_num - 1)*$block_cnt)+1;
                                            $block_end = $block_start + $block_cnt - 1;

                                            $total_page = ceil($total_record/$list);
                                            if($block_end > $total_page){
                                                $block_end = $total_page;
                                            }
                                            $total_block = ceil($total_page/$block_cnt);
                                            $page_start = ($page - 1) * $list;

                                            $sql = "SELECT * FROM review LIMIT $page_start, $list;";
                                            $result = mysqli_query( $jb_conn, $sql );
                                            if($block_start-1<=0)
                                                $prev = 1;
                                            else
                                                $prev = $block_start-1;

                                            while( $row = mysqli_fetch_array( $result ) ) {
                                                echo '<div class="box">
                                                        <a href="view.php?idx='.$row['idx'].'">
                                                        <h2>'. $row['title'].'</h2>
                                                        <h3>'. $row['movietitle'].'</h3>
                                                        </a>
                                                        <p>'. $row['content'].'</p>
                                                    </div>' ;
                                            }
                                            echo '</div>
                                                <hr class="major" />
                                                <ul class="pagination" align="center">
                                                    <li><a href="review_list.php?page='.($prev).'" class="button">Prev</a></li>
                                                    <li><a href="review_list.php?page='.$block_start.'" class="page">'.$block_start.'</a></li>
                                                    <li><a href="review_list.php?page='.($block_start+1).'" class="page">'.($block_start+1).'</a></li>
                                                    <li><a href="review_list.php?page='.($block_start+2).'" class="page">'.($block_start+2).'</a></li>
                                                    <li><a href="review_list.php?page='.($block_start+3).'" class="page">'.($block_start+3).'</a></li>
                                                    <li><a href="review_list.php?page='.($block_start+4).'" class="page">'.($block_start+4).'</a></li>
                                                    <li><a href="review_list.php?page='.($block_start+5).'" class="button">Next</a></li>
                                                </ul>
											</div>';
                                        ?>


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
										<li><a href="review_list.html">Elements</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

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