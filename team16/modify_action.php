<?php
    $connect = mysqli_connect("localhost", "team16", "team16", "team16") or die ("connect fail");
    $idx = $_GET['idx'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $date = date('Y-m-d H:i:s');
    $query = "update board set title='$title', content='$content', date='$date' where idx=$idx";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./view.php?idx=<?=$idx?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
