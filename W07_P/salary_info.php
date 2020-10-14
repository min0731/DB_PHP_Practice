<?php
    $link=mysqli_connect ('localhost','admin','admin','employees');
    
    #연결 하는데 있어서 오류가 있으면 종료함
    if(mysqli_connect_error()){

        echo "MariaDB 접속에 실패했습니다.";
        echo "<br>";
        echo mysqli_connect_error();
        exit(); #연결 종료
    }
    $filtered_number=mysqli_real_escape_string($link,$_GET['number']);

    #출력하고 싶은 내용의 쿼리를 생성함
    $query="
    select first_name, last_name, salary, from_date, to_date
    from salaries left join employees 
    on salaries.emp_no=employees.emp_no
    where salaries.emp_no= ".$filtered_number."
    ";//해당 정보의 연봉만 출력함

    //LIMIT하고 한칸 띄어야 $number이랑 합쳐서 인식하지 않음

    $article = ''; //변수를 초기화
    #만든 쿼리를 던진 후 받은 내용을 저장
    $result=mysqli_query($link, $query); //링크에게 쿼리를 던져달라 함

    while ($row=mysqli_fetch_array($result)){ // reulst에는 배열로 저장되었고 
        #이를 fetch_arry를 통해서 한줄씩 가져옴
        #가져온 결과를 article에 저장함 -> 초기화 필요
        $article.='<tr><td>';
        $article.=$row['first_name'];
        $article .='</td><td>';
 
        $article.=$row['last_name'];
        $article .='</td><td>';

        $article.=$row['salary'];
        $article .='</td><td>';

        $article.=$row['from_date'];
        $article .='</td><td>';

        $article.=$row['to_date'];
        $article .='</td><td>';

        $article.='</td></tr>';//닫을 때는 거꾸로 닫아줌
    }
mysqli_free_result($result);//할당 되었던 리소스를 반납
mysqli_close($link);//링크연결 종료

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>연봉 정보</title>
    <style>
    body {
        font-family: consolas, monospace;
        font-family: 12px;
    }

    table {
        width 100%;
    }

    th,
    td {
        padding: 10px;
        border-bottom: 1px soid #dadada;
    }
    </style>

</head>

<body>
    <h2><a href="index.php">직원 관리 시스템</a>| 연봉 정보</h2>
    <table>
        <tr>
            <th>first_name</th>
            <th>lsat_name</th>
            <th>salary</th>
            <th>from_date</th>
            <th>to_date</th>
        </tr>
        <?= $article?>
    </table>
</body>

</html>
