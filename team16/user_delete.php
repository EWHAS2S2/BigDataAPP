<?php
$user_id = $_POST['userid'];
$jb_conn = mysqli_connect( 'localhost', 'team16', 'team16', 'team16' );
$jb_sql = "DELETE FROM USER WHERE user_id='$user_id';";
$jb_result = mysqli_query( $jb_conn, $jb_sql );

echo("<script>location.replace('MovieTotal.php');</script>");
?>
