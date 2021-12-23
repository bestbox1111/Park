<?php
    $email   = $_POST["email"];
   

   $con = mysqli_connect("localhost", "user1", "12345", "sample");
   $sql = "select * from members where email='$email'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 이메일입니다.!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $useremail = $row["email"];

        mysqli_close($con);

        if($useremail != $email)
        {

           echo("
              <script>
                window.alert('이메일을 정확히 입력해 주세요!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["usergender"] = $row["gender"];
            $_SESSION["userlocation"] = $row["location"];

            echo("
              <script>
                location.href = 'member_modify_form.php';
              </script>
            ");
        }
     }        
?>
