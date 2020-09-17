<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <?php
     $link = mysqli_connect('localhost', 'root', '20172041', 'dbp');
     $filtered = array(
         'title' => mysqli_real_escape_string($link,$_POST['title']),
         'description' => mysqli_real_escape_string($link, $_POST['description'])
);
      $query = "
        INSERT INTO topic
          (title, description, created)
          VALUES (
            '{$filtered['title']}',
            '{$filtered['description']}',
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
