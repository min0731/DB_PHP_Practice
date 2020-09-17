<?php
    $link = mysqli_connect('localhost', 'root', '20172041', 'dbp');
    settype($_POST['id'], 'integer');
    $filtered = array(
        'id' => mysqli_real_escape_string($link, $_POST['id'])
    );
    $query = "
      DELETE
        FROM topic
        WHERE id = {$filtered['id']}
    ";


    $result = mysqli_query($link, $query);
    if($result==false){
      echo'삭제 중 오류발생';
      error_log(mysql_error($link));
    }
    else {
      echo '<h1>삭제됨.....★</h1>';
      echo"<img src='7.JPG'>";
      echo '<a href="index.php">돌아가기</a>';
    }
    ?>

    </body>
    </html>
