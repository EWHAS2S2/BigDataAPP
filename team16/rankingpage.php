<!DOCTYPE html>
<html lang="en">

<div class="container">
    <br>
    <br>
    <width="80" height="80"><font size="6"> &nbsp;Movie Ranking</font>
</div>


<body>
<h2> Vote Average Ranking Top10 </h2>

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

$sql = "SELECT movie_id, title, release_date FROM movie_recommend ORDER BY vote_average DESC limit 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 순서대로 출력
  while($row = $result->fetch_assoc()) {
    echo $row["movie_id"]. $row["title"].$row["release_date"]."<br>";
  }
} else {
  echo "데이터가 없습니다.";
}
$conn->close();
?>

</body>


<body>
<h2> Popularity Ranking Top10 </h2>

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

$sql = "SELECT movie_id, title, release_date FROM movie_recommend ORDER BY popularity DESC limit 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 순서대로 출력
  while($row = $result->fetch_assoc()) {
    echo $row["movie_id"]. $row["title"].$row["release_date"]."<br>";
  }
} else {
  echo "데이터가 없습니다.";
}
$conn->close();
?>
</body>

</html>

