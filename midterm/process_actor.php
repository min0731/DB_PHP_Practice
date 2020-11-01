<?php
    $link=mysqli_connect ('localhost','root','20172041','sakila');

    #연결 하는데 있어서 오류가 있으면 종료함
    if(mysqli_connect_error()){

        echo "MariaDB 접속에 실패했습니다.";
        echo "<br>";
        echo mysqli_connect_error();
        exit(); #연결 종료
    }

    #출력하고 싶은 내용의 쿼리를 생성함
    $query = "SELECT * FROM actor_info limit 10";
    $result = mysqli_query($link, $query);

    $article = ''; //변수를 초기화
    #만든 쿼리를 던진 후 받은 내용을 저장
    $result=mysqli_query($link, $query); //링크에게 쿼리를 던져달라 함


    while ($row=mysqli_fetch_array($result)){ // reulst에는 배열로 저장되었고
        #이를 fetch_arry를 통해서 한줄씩 가져옴
        #가져온 결과를 article에 저장함 -> 초기화 필요
        $article.='<tr><td></td>';
        $article.='<td>';

        $article.=$row['actor_id'];
        $article .='</td><td>';

        $article.=$row['first_name'];
        $article .='</td><td>';

        $article.=$row['last_name'];
        $article .='</td><td>';

$article .= '<td><a href="process_actor.php?actor_id='.$row['actor_id'].'">More</a></td>';

        $article.='</tr>';//닫을 때는 거꾸로 닫아줌
    }


    if(isset($_GET['actor_id'])){
      $filtered_id = mysqli_real_escape_string($link, $_GET['actor_id']);
  } else {
      $filtered_id = mysqli_real_escape_string($link, $_POST['actor_id']);
  }

  $query = "SELECT * FROM actor_info where actor_id='{$filtered_id}'";
    $result = mysqli_query($link, $query);
    $info='';

  while ($row=mysqli_fetch_array($result)){
  $info.='<tr><td>';
      $info.=$row['first_name'];
      $info.='</td>';
      $info.='<td>';
      $info.=$row['last_name'];
      $info.='</td><td>';
      $info.=$row['film_info'];
      $info.='</td></tr>';
  }


mysqli_free_result($result);//할당 되었던 리소스를 반납
mysqli_close($link);//링크연결 종료

?>

<!DOCTYPE html>
<head>
<title>@media query</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
 <style>
 a:link { color: white; text-decoration: none;}
 a:visited { color: white; text-decoration: none;}
 a:hover { color: white; text-decoration: underline;}
 p.margin {

     margin-top: 6px;

     margin-bottom: 6px;

     margin-right: 6px;

     margin-left: 6px;}

#nav{background-color:#3b4063; height:50px; font-size: 25px; color: white;
 font-family: "Comic Sans", "Apple Chancery", cursive; font-style: italic;}
#nav{margin:0 0 10px 0; padding:0px;}
#nav li{display:inline;}
table {
    width 100%;
}
th,
td {
    padding: 10px;
    border-bottom: px soid #dadada;
}

@media screen and (max-width: 480px)
{}
.main_right_btn {

width:50%;

height:600px;

background-color:#eeddee;

float:left;}


.main_left_btn {

width:50%;

height:600px;

background-color:#eeddee;

float:left;}

.main_list {

width:100%;

height:80px;
color: white;

background-color:#3b4063;

float:left;}



</style>


</head>

<body>

<img src='1.jpg' width='1400' height='400'>
<ul id="nav">
<li cal><a href="index.php"> &nbsp;Home  |</a></li>
<li><a href="Actor.php">Actor    |</a></li>
<li><a href="Movie.php">Movie    |</a></li>
<li><a href="Rent.php">Rent</a></li>
</ul>

<div>
  <div class="main_left_btn">
    <h1>&nbsp;&nbsp;   ----Casting members----------</h1>
    <table>
            <tr>
              <th></th>
                <th>actor_id</th>
                <th>first_name</th>
                <th>last_name</th>
                    <th></th>
                <th>more_info</th>
              </tr>
     <?= $article?>
              </table>
  </div>

  <div class="main_right_btn">
    <br>
    <br>
    <table>
            <tr>
              <th></th>
                <th></th>
                <th></th>
                </tr>
    <?= $info?>
     </table>
     <br>
     <img src='4.jpg' width='700' height='320'>
  </div>

  <div class="main_list">  <p style="text-align:center">Filmmaker: Marvel Company
  Company Contact: pmj7755@naver.com</div>



</body>

</html>
