<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
  $link = mysqli_connect("localhost", "root", "20172041", "dbp");
  $query = "
    INSERT INTO topic
      (title, description, created)
      VALUES (
        '{$_POST['title']}',
        '{$_POST['description']}',
        now()
        )
  ";
  $result = mysqli_query($link, $query);
  if($result==false){
    echo'오류발생';
    error_log(mysql_error($link));
  }
  else {
    echo '<h1>성공하셨네요.....★</h1>';
    echo"<img src='7.JPG'>";
    echo '<a href="index.php">돌아가기</a>';
  }
?>

</body>
</html>
