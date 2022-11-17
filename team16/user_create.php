<?php
$user_id = $_POST['id'];
$user_name = $_POST['nickname'];
$password = $_POST['password'];
$password_cf = $_POST['confirmPassword'];
$link = "user_delete.html";

if($password == $password_cf){
    $jb_conn = mysqli_connect( 'localhost', 'team16', 'team16', 'team16' );
    $jb_sql = "INSERT INTO USER(user_id, user_name, user_pw) VALUES ('$user_id', '$user_name', '$password');";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    echo("<script>location.replace('MovieTotal.php');</script>");
}else{
    echo "<script>location.replace('MovieTotal.php');</script>";
}
?>
