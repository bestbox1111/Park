
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" href="css/media_select.css">
    <script src="js/select.js"></script>
  


  




<?php
 
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>	



  <!-- 셀렉트와 로그인 부분 전체 태그 -->
  <div id="nav_select">

    <!-- 셀렉트 부분 -->
    <div class="middle2_center">     
    <form action="#미정" method="POST" name="adress_decide" class="search">
        <select name="" class="si" >
        
            <option value="천안시" >천안시</option>
        
        </select>
        <select class="gu" onchange="itemchange()">
            <option value="choice" >====</option>
            <option value="seobuk" >서북구</option>
            <option value="dongnam" >동남구</option>
        </select>
        <select class="dong" >
            <option value="choice" >====</option>
            <option value="busung" >부성동</option>
            <option value="baeck" >백석동</option>
            <option value="ssang" >쌍용동</option>
            <option value="sung" >성정동</option>
        </select>

        <select id="decidemenu" >
            <option value="choice" >====</option>
            <option value="one"  >한식</option>
            <option value="two" >중식</option>
            <option value="three" >일식</option>
            <option value="four" >양식</option>
            <option value="five" >술집</option>
        </select>

        <select id="menu_one" >
            <option value="choice" >====</option>
            <option value="s1" >한식식당1</option>
            <option value="s2" >한식식당2</option>
            <option value="s3" >한식식당3</option>
            <option value="s4" >한식식당4</option>
            <option value="s5" >한식식당5</option>
        </select>     

        <button>
            GO
        </button>
    </form>
    </div>
    <!-- 셀렉트 부분 끝-->

    <!-- 로그인부분 시작 -->



<?php

if(!$userid){
?>
    <div class="middle2_right">
        <div class="middle2_right_1 ">
        <a href="log_form.php">
                <button>         
                    로그인                 
                </button>
           </a>    
                                
        </div>
        <div class="middle2_right_2 ">
            <div class="findid">
                <a href="log_email_form.php" >아이디/비밀번호 찾기</a><br>
            </div>
            <div class="memberin">
                <a href="member_form.php" >회원가입</a>
            </div>
        </div>
    </div> 




<?php
}else{
    $logged= $username."(".$userid.")님 로그인
    [Level".$userlevel.",Point:".$userpoint."]";
?>
   <div class="middle2_right">
        <div class="middle2_right_1 ">            
             <button>
                <a href="logout.php">
                    로그아웃
                </a>    
            </button>   
        </div>
        <div class="middle2_right_2 ">
            <div class="findid">
                <?=$logged?><br>
            </div>
            <div class="memberin">
                <a href="member_modify_form.php" >정보변경</a>
            </div>
            <div class="message_send">
                <a href="message_form.php" >쪽지함</a>
            </div>
        </div>
    </div> 

<?php
}
?>    

    <!-- 로그인부분 끝 -->
</div>
<!-- 셀렉트와 로그인 부분 전체 태그 끝-->

