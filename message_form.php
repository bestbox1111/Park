<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>



    <link rel="stylesheet" href="css/message_form.css">
    <script src="js/message_form.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    
</head>

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
	if (!$userid )
	{
		echo("<script>
				alert('로그인 후 이용해주세요!');
				history.go(-1);
				</script>
			");
		exit;
	}
?>



   	<div id="message_box">


        <div class="message_center">
            <h3 id="write_title">
                    쪽지 보내기
            </h3>
            <ul class="top_buttons">
                    <li><span><a href="message_box.php?mode=rv">받은 쪽지함  &nbsp&nbsp</a></span></li>
                    <li><span><a href="message_box.php?mode=send">보낸 쪽지함</a></span></li>
            </ul>
            <form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
                <div id="write_msg">
                    <ul>
                        <li>
                            <span class="col1">보내는 사람 : </span>
                            <span class="col2"><?=$userid?></span>
                        </li>	
                        <li>
                            <span class="col1">수신 아이디 : </span>
                            <span class="col2"><input name="rv_id" type="text" id="rv_id"></span>
                        </li>	
                        <li>
                            <span class="col1">제목 : </span>
                            <span class="col2"><input name="subject" type="text" id="subject"></span>
                        </li>	    	
                        <li id="text_area">	
                            <span class="col1">내용 : </span>
                            <span class="col2">
                                <textarea name="message_content" id="message_content"></textarea>
                            </span>
                        </li>
                    </ul>
	    	        <button class="message_button" type="button" onclick="check_input()">보내기</button>
	    	    </div>	    	
	        </form>
     
	</div> <!-- message_box -->



