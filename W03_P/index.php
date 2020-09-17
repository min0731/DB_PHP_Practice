
<?php
  $link = mysqli_connect('localhost','root','20172041','dbp');
  $query = "SELECT * FROM topic";
  $result = mysqli_query($link, $query);
  $list ='';
  while ($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title' => 'HI',
    'description' => 'Dog is ...'
  );
   $update_link = '';
   $delete_link = '';

  if( isset($_GET['id'])) {
    $query = "SELECT * FROM topic WHERE id={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
       $update_link = '<div style="width:50; height:40; float:left; margin-right:10px;">
       <a href="update.php?id='.$_GET['id'].'">
       <img src="8.JPG" alt="My Image" width="50" height="40"></a></div>';
       $delete_link = '<div style="width:50; height:40;  float:left;">
    <form action="process_delete.php" method="POST">
    <input type="hidden" name="id" value="'.$_GET['id'].'">
  <input tyPE="IMAGE" src="9.JPG" name="Submit" value="Submit" width="50" height="40">
  </form></div>
  ';
}
 ?>

 <!DOCTYPE html>
 <html>
  <head>
     <meta charset="utf-8">
     <title>DATABASE</title>
   </head>
   <body>
     <meta charset="utf-8">
     <title>강아지 사전</title>
   </head>
   <body>
   <a href="index.php">  <img src="3.JPG" alt="My Image" width="600" height="200"></a>
      <img src="1.JPG" alt="My Image" width="300" height="200"><p>
       <img src="4.JPG" alt="My Image" width="300" height="50">
     <ol><?= $list ?></ol>
     <?= $update_link ?>
        <?= $delete_link ?>
<br><br><br><img src="6.JPG" alt="My Image" width="300" height="50">
     <h2><?= $article['title'] ?></h2>
     <h2> <?= $article['description'] ?></h2>
    <a href="create.php">
      <img src="5.JPG" alt="My Image" width="100" height="50"></a>

   </body>
 </html>
