<!DOCTYPE html>
<html>
<head>
    <title>Vote Account Grouping by Genre Page</title>
</head>
<body>
    <form>
        <h3>Movie Vote Account Grouping by Genre</h3>
        
    </form>
    
        <?php 
            $servername = "localhost";
            $user = "team16";
            $password = "team16";
            $dbname = "team16";

            $connect = mysqli_connect($servername, $user, $password, $dbname);
 
            if (!$connect) {
            // die() 함수는 인수로 전달받은 메시지를 출력하고, 현재 실행 중인 PHP 스크립트를 종료시키는 함수입니다.
            die("서버와의 연결 실패! : ".mysqli_connect_error());
            }
 
            //echo "서버와의 연결 성공!"."<br>";

            // 서버 연결 종료 mysqli_close($connect);

            

            $sql = "SELECT genre_id, genre_name FROM genre "; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
          
            
                while ($row = mysqli_fetch_assoc($result)) { // 집합에서 하나씩 레코드를 꺼내 연관배열로 저장
                    echo $row['genre_id']." : ".$row['genre_name']."<br>"; // 연관배열 인덱스 접근
                }

                echo "<br>";

                
            $sql = "SELECT movie_id, title, vote_average FROM movie_recommend GROUP BY vote_average HAVING vote_average > 8 "; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행

                while ($row = mysqli_fetch_assoc($result)) { // 집합에서 하나씩 레코드를 꺼내 연관배열로 저장
                    echo $row['movie_id']." : ".$row['title']." , ".$row['vote_average']."<br>"; // 연관배열 인덱스 접근
                }

            
            $sql = "SELECT avg(budget) AS AVG1 FROM movie_budget"; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
            $one = mysqli_fetch_array($result);
            echo "<br>"."average budget".$one['AVG1']."<br>";    
            
            $sql = "SELECT avg(revenue) AS AVG2 FROM movie_budget"; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행
            $one = mysqli_fetch_array($result);
            echo "<br>"."average revenue".$one['AVG2']."<br><br>";    
            

            $sql = "SELECT title, budget, revenue FROM movie_budget GROUP BY budget, revenue HAVING budget > 'AVG1' and revenue > 'AVG2' "; // 쿼리
            $result = mysqli_query($connect, $sql); // 쿼리 실행

                while ($row = mysqli_fetch_assoc($result)) { // 집합에서 하나씩 레코드를 꺼내 연관배열로 저장
                    echo $row['title']." : ".$row['budget']." ".$row['revenue']."<br>"; // 연관배열 인덱스 접근
                }
            
            

        ?>
    
    <form>

    </form>
</body>
</html>
