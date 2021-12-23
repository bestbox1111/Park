<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="css/search_form2.css">
    <script src="https://kit.fontawesome.com/af86d9abf5.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/search_form.js"></script>

</head>

<?php

    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";

?>	

<?php    
   	$con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql    = "select * from members where id= '$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

?>



    <header>
        <?php include "title.php"?>
    </header>
    <nav>
        <?php include "nav.php"?>    
    </nav>
    <nav>
        <?php include "nav_image.php"?>    
    </nav>


<?php


if($userid){

?>

    <div class="write">
        <div class="write_space1">
        </div>

        <div class="write_center">
            <div class="write_title">
                <h1>검색하기</h1>
            </div>
                   

            <div class="search_box">
                <div class="search_category">
                    <form action="search_form_list.php" method="get" name="search_form">
   
                        <select name="category" >
                            <option value="ids"  selected>아이디</option>
                            <option value="names">이름</option>
                        </select>
              
                        <input type="text"  name="search" id="search_content">
                        <button onclick="check_input()">검색</button >
                   </form>
                </div>
            </div>


            <ul id="board_list">
                        <li>
                            <span class="col1">넘버</span>
                            <span class="col2">제목</a></span>
                            <span class="col3">아이디</a></span>
                            <span class="col4">이름</span>
                            <span class="col5">첨부</span>
                            <span class="col6">등록일</span>
                            <span class="col7">조회수</span>
                        </li>
        </div>
        <div class="write_space2">
        </div>
    </div>
    </body>
</html>

<?php

}else{
    echo("
    <script>
      window.alert('로그인후 이용해주세요!')
      history.go(-1)
    </script>
  ");
?>    

<?php
}
?>