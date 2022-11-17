<?php    $connect = mysqli_connect("localhost","team16" ,"team16" ,"team16" ) or die("connect fail");
                $idx = $_GET['idx'];
                $query = "select title, content, date, writer from board where idx=$idx";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
 
                $title = $rows['title'];
                $content = $rows['content'];
                $writer = $rows['writer'];
 
                session_start();
 
 
                $URL = "./index.php";
 
        ?>
        <form method = "get" action = "modify_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글수정</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="writer" value=<?=$writer?></td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60 value=<?=$title?>></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=85 rows=15><?=$content?></textarea></td>
                        </tr>
 
                        </table>
 
                        <center>
                        <input type="hidden" name="idx" value="<?=$idx?>">
                        <input type = "submit" value="수정">
                        </center>
                </td>
                </tr>
        </table>
