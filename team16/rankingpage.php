<!DOCTYPE html>
<html lang="en">

<div class="container">
    <br>
    <br>
    <width="80" height="80"><font size="6"> &nbsp;Movie Ranking</font>
</div>


<body>
<h2> Vote Average Ranking Top30 </h2>

<?php
$servername = "localhost";
$username = "team16";
$password = "team16";
$dbname = "team16";

// 접속 생성
$conn = new mysqli($servername, $username, $password, $dbname);
// 접속 체크
if ($conn->connect_error) {
  die("접속 실패: " . $conn->connect_error);
}

$sql = "SELECT title, vote_average, RANK() OVER (ORDER BY vote_average DESC) AS ranking
FROM movie_recommend limit 30";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 순서대로 출력
  while($row = $result->fetch_assoc()) {
    echo $row["ranking"]. " : ". $row["vote_average"]. " ". $row["title"]."<br>";
  }
} else {
  echo "데이터가 없습니다.";
}
$conn->close();
?>

</body>


<body>
<h2> Popularity Ranking Top30 </h2>

<?php
$servername = "localhost";
$username = "team16";
$password = "team16";
$dbname = "team16";

// 접속 생성
$conn = new mysqli($servername, $username, $password, $dbname);
// 접속 체크
if ($conn->connect_error) {
  die("접속 실패: " . $conn->connect_error);
}

$sql = "SELECT title, popularity, RANK() OVER (ORDER BY popularity DESC) AS ranking
FROM movie_recommend limit 30";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 순서대로 출력
  while($row = $result->fetch_assoc()) {
    echo $row["ranking"]. " : ". $row["popularity"]. " ". $row["title"]."<br>";
  }
} else {
  echo "데이터가 없습니다.";
}
$conn->close();
?>
</body>

</html>

