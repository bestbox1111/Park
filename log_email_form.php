<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/log_email_form.css">
    <script src="js/log_email_form.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    
    
    <script src="https://kit.fontawesome.com/af86d9abf5.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>
</head>
<body>
<head>

    <div class="wrap">
        <div class="wrap_first">
         
        </div>
        <div class="wrap_center">
            <div class="login_title">
                <h1>KINGWANG FIND ID,PW</h1>  
            </div>
            <div class="login_input">
                <div class="login_input_1">
                    <form name="log_email_form" action="log_email_form_input.php" method="POST" >
                        <input type="text" name="email" placeholder="E_mail을 입력해주세여" id="email">
                      
                    </form>
                    <div class="login_input_2" onclick="check_input()" >
                    
                        <button class="login_go" id="login_go2"  >
                            <h3> 클릭</h3>
                        </button>
                
                    </div>
                </div>  
            </div>
    
            
            <div class="login_maintain">
               <div class="login_maingo">
                  <a href="">
                    <div class="login_v1">
                    
                    </div>
                    <div class="login_v2">
                        <!-- <a href=""></a> -->
                        <a href="log_form.php"><h3>로그인</h3></a>
                    </div>
                  </a>
              </div>
            </div>
        <div class="membership" margin-top=10px;>
            <a href="member_form.php"><h3>회원가입</h3></a>
        </div>
            <div id="footer">
                <h3>corporation : KINGWANGJJANGMAN</h3>
                <h3>e_mail : bestbox1111@naver.com</h3>
                <h3>location :  chonan-si</h3>
                <h3>purpose: RECOMMAND TASTE FOOD </h3>
            </div> 
        </div>
        <div class="wrap_last">
           
        </div>


    </div>




    
</body>
</html>