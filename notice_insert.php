
<?php




    session_start();    
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
  
    if ( $userlevel != 100 )
    {
        echo("
            <script>
                alert(' 관리자만 이용이 가능합니다..!');
                history.go(-1)
            </script>
        ");
    exit;
    }

    $subject = $_POST["subject"];
    $text_content = $_POST["text_content"];

	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$text_content = htmlspecialchars($text_content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	 
	$con = mysqli_connect("localhost", "user1", "12345", "sample");

	$sql = "insert into notice (id, name, subject, text_content, regist_day, level) ";
	$sql .= "values ('$userid', '$username', '$subject', '$text_content', '$regist_day','$userlevel')";
	


	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행



	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'notice_form_list.php';
	   </script>
	";
?>

  
