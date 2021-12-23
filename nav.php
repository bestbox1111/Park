<head>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/media_nav.css">
  
    <script src="https://kit.fontawesome.com/af86d9abf5.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>
   
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

<?php
        if(!$userid){

?>

     <!-- 네비 부분 -->
     <div id="nav">
        <div class="navbar_log">
            <div>  <i class="fas fa-crown"></i></div>     
            <div><a href="index.php">KINGWANGJJANG</a></div>   
        </div>
        <div class="navbar_menu">
            <li><a href="home.php"  >홈소개</a></li>
            <li><a href="notice_form.php"  >공지사항</a></li>
            <li ><a href="board_form.php">게시판</a></li>
            <li><a href="message_form.php"  >쪽지함</a></li>
            <li><a href="search_form.php">검색란</a></li>
        </div>
    </div>
    <!-- 네비 부분 마무리 -->

<?php
}else{

?>
    <div id="nav">
        <div class="navbar_log">
            <div>  <i class="fas fa-crown"></i></div>     
            <div><a href="main.php">KINGWANGJJANG</a></div>   
        </div>
        <div class="navbar_menu">
            <li><a href="home.php">홈소개</a></li>
            <li><a href="notice_form.php">공지사항</a></li>
            <li ><a href="board_form.php">게시판</a></li>
            <li><a href="message_form.php">쪽지함</a></li>
            <li><a href="search_form.php">검색란</a></li>
        </div>
    </div>
   
    <?php
}

?>
