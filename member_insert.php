<?php
    $id   = $_POST["id"];
    $password = $_POST["password"];
    $name = $_POST["name"];

    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];
    $email = $email1."@".$email2;


   

    $gender = $_POST["gender"];
    $location=$_POST["location"];

    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
          
    $con = mysqli_connect("localhost", "user1", "12345", "sample");

	$sql = "insert into members(id, password, name, email, gender, location, regist_day, level, point) ";
	$sql .= "values('$id', '$password', '$name', '$email', '$gender', '$location',' $regist_day', 1, 0)";

    echo $sql;
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     


    echo "
    <script>
        location.href='index.php';
    </script>
    ";

?>