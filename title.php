




<head>
    <link rel="stylesheet" href="css/title.css">
    <link rel="stylesheet" href="css/media_title.css">
    <script src="js/jquery-3.6.0.js"></script>
    
</head>


<body >
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
    

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
        <div id="title">
            <div class="title_name">
                <h1>KINGWANGJJANG'S TASTE FOOD</h1>
            </div>
            <div class="title_log">
                <h1>  <a href="member_form.php">회원가입</a> &nbsp&nbsp</h1>
                  
                   <h1><a href="log_form.php"> 로그인</a> </h1> 
               
               
           
            </div>
        </div>
<?php
}else{
    $logged= $username."(".$userid.")님 로그인 되었습니다.";
?>
     <div id="title">
            <div class="title_name">
                <h1>KINGWANGJJANG'S TASTE FOOD</h1>
            </div>
            <div class="title_log">
                
                <?php echo $logged ?>&nbsp&nbsp
                <a href="logout.php"> 로그아웃</a> &nbsp&nbsp
         
<?php
}
?>


<?php
    if($userlevel==100){
?>
            <a href="admin.php">관리자 모드<host> </a>
<?php
}

?>
</div>
        </div>
    

