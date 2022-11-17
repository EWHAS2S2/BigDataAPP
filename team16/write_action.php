<?php
                $connect = mysqli_connect("localhost", "team16", "team16", "mysql") or die("fail");
                
                $id = $_GET['name'];                      //Writer
                $movietitle = $_GET['movietitle'];                        //Password
                $title = $_GET['title'];                  //Title
                $content = $_GET['content'];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './index.php';                   //return URL
 
 
                $query = "insert into board (title, content, date, writer, idx, movietitle) 
                        values('$title', '$content', '$date','$id', 0, '$movietitle')";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>
 
