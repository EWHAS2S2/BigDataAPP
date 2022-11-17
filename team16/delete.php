<?php    $connect = mysqli_connect("localhost","team16" ,"team16" ,"team16" ) or die("connect fail");
                $idx = $_GET['idx'];
                $query = "delete from review where idx=$idx";
                $result = $connect->query($query);
  
                session_start();
 
 
                $URL = "./index.php";
 
        ?>
        <script>
            alert("삭제되었습니다.");
            location.replace("./index.php?");
        </script>