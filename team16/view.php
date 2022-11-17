<?php
                $connect = mysqli_connect('localhost', 'team16', 'team16', 'team16');
                $idx = $_GET['idx'];
                session_start();
                $query = "select title, content, date, writer, movietitle from board where idx =$idx";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
 
        <table class="view_table" align=center>
        <tr>
                <td class="view_id">제목 : </td>           
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자 : </td>
                <td class="view_id2"><?php echo $rows['writer']?></td>
        </tr>
        <tr>
                <td class="view_id">영화 제목 : </td>
                <td class="view_id2"><?php echo $rows['movietitle']?></td>
        </tr>
 
 
        <tr>
                <td class="view_id">내용 : </td>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
        <br>
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
            <center>
                <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?idx=<?=$idx?>'">수정</button>
                <button class="view_btn1" onclick="location.href='./delete.php?idx=<?=$idx?>'">삭제</button>
            </center>
        </div>