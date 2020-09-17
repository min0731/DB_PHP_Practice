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
         'description' => mysqli_real_escape_string($link, $_POST['description']),
         'id' => mysqli_real_escape_string($link, $_POST['id'])

);
$query = "
  UPDATE topic
      SET
          title = '{$filtered['title']}',
          description = '{$filtered['description']}'
      WHERE
          id = '{$filtered['id']}'
";

  $result = mysqli_query($link, $query);
  if($result==false){
    echo'수정 중 오류발생';
    error_log(mysql_error($link));
  }
  else {
    echo '<h1>수정 성공.....★</h1>';
    echo"<img src='7.JPG'>";
    echo '<a href="index.php">돌아가기</a>';
  }
?>

</body>
</html>
