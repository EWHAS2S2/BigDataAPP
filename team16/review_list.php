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
                                    <a href="MovieTotal.php" class="logo"><strong>Movies App</strong> by S2S2.</a>
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