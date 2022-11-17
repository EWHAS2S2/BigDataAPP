<?php
$user_id = $_POST['id'];
$user_name = $_POST['nickname'];
$jb_conn = mysqli_connect( 'localhost', 'team16', 'team16', 'team16' );
$jb_sql = "UPDATE user SET user_name = '$user_name' where user_id = '$user_id';";
$jb_result = mysqli_query( $jb_conn, $jb_sql );
echo("<script>location.replace('MovieTotal.php');</script>");
?>


