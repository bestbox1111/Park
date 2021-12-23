<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/member_form.css">
    <link rel="stylesheet" href="css/mediascreen_member_modify_form.css">
    <link rel="stylesheet" href="css/member_modify_title_form.css">
    

    <script src="js/member_modify_form.js"></script>
    <script src="https://kit.fontawesome.com/af86d9abf5.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>


    <title>Document</title>
</head>
<body>

    <header>
        <?php include "title.php"?>
    </header>



   


<?php    
   	$con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql    = "select * from members where id= '$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["password"];
    $name = $row["name"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];
    $gender= $row["gender"];  
    $location=$row["location"];




    mysqli_close($con);
?>




    <nav>
        <?php include "nav.php"?>    
    </nav>
    <nav>
        <?php include "nav_image.php"?>    
    </nav>




        <div class="member">
      
 
            <div class="member_space1">
                <h1></h1>
            </div>

            <div class="member_center">
                <h1>ID,PW 확인목록</h1>
           
             
                
             <!-- <form name="member_formdle" method="POST" action="member_modify.php?id=<?=$userid?>"  > -->
             <form name="member_formdle" method="POST"   >
                    <div class="member_form">  
                        
                        
                        <div class="member_center_form_text">아이디 :</div>
                        <div class="member_center_form_inputid">
                            <?=$userid?>
                        </div>
                        <div class="member_center_form_img">
                            <a href="#">
                             
                            </a>
                        </div>
                    </div>  

                    <div class="member_form">        
                        <div class="member_center_form_text">비밀번호 :</div>
                        <div class="member_center_form_inputpassword">
                            <input type="password" name="password" id="password"  value="<?=$pass?>" >
                        </div>
                        <div class="member_center_form_img">
                            <a href=""> 
                            </a>
                        </div>
                    </div>  
                  
                    <div class="member_form">        
                        <div class="member_center_form_text">비밀번호확인 :</div>
                        <div class="member_center_form_inputpasswordrecheck">
                            <input type="password" name="pass_confirm"  id="pass_confirm" value="<?=$pass?>">
                        </div>
                        <div class="member_center_form_img">
                            <a href=""> 
                            </a>
                        </div>
                    </div>  

                    <div class="member_form">        
                        <div class="member_center_form_text">이름 :</div>
                        <div class="member_center_form_inputname">
                            <input type="text" name="name" id="name"  value="<?=$name?>">
                        </div>
                        <div class="member_center_form_img">
                            <a href=""> 
                            </a>
                        </div>
                    </div>  

                    <div class="member_form">        
                        <div class="member_center_form_text">이메일 :</div>
                            <div class="member_center_form_inputemail1">
                                <input type="text" name="email1" id="email1" value="<?=$email1?>">@<input type="text" name="email2" id="email2"  value="<?=$email2?>" >
                        
                            </div>
                        <div class="member_center_form_img">
                            <a href=""> 
                            </a>
                        </div>
                    </div>  

                    <div class="member_form_input">        
                        <div class="member_center_form_text">성별 :</div>
                        <div class="member_center_form_inputgender">
                        <select class="gender"  name="gender" id="gender" >                                 
                            <option value="남자"<?php if($gender == "남자") echo "selected" ?>  >남자</option>
                            <option value="여자"<?php if($gender == "여자") echo "selected" ?>  >여자</option>        
                        </select>
                        </div>
                        <div class="member_center_form_img">
                            <a href=""> 
                            </a>
                        </div>
                    </div>  


                    <div class="member_form_input">        
                        <div class="member_center_form_text">지역 :</div>
                        <div class="member_center_form_inputlocation">
                            <select class="location" name="location" id="location" >
                                <option value="천안" <?php if($location =="천안") echo "selected" ?>>천안</option>
                                <option value="천안외" <?php if($location =="천안외") echo "selected" ?>>천안외</option>
                            </select>
                        </div>
                        <div class="member_center_form_img">
                            <a href=""> 
                            </a>
                        </div>
                    </div>  
                </form>

                <div class="space">
                    <div class="save_space">
                        <h1></h1>
                    </div>
                 
                </div>
                <div class="save_or_cancel">
                    <div class="save">
                     
                        <a href="log_form.php"><img src="img/ok.png" style="cursor: pointer" onclick="check_input()"></a>
                     
                    </div>
                    <!-- <div class="cancel">
                      
                        <img src="img/button_reset.gif" style="cursor: pointer" onclick="reset_form()">
                    
                    </div> -->
                </div>
              
            
            </div>

            <div class="member_space2">
                <h1></h1>
            </div>
        </div>
    
</body>
</html>