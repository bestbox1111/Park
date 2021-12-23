<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>


    <link rel="stylesheet" href="css/board.css">

</head>

    <head>
        <?php include "title.php"?>
    </head>

    <nav>
        <?php include "nav.php"?>    
    </nav>
    <nav>
        <?php include "nav_image.php"?>    
    </nav>



    <div id="board_box">
	    <h3 class="title">
			공지사항 > 내용보기
		</h3>
<?php

	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from notice where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$text_content    = $row["text_content"];

	

	$text_content = str_replace(" ", "&nbsp;", $text_content);
	$text_content = str_replace("\n", "<br>", $text_content);

 
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
			</li>
			<li>
			
				<?=$text_content?>
			</li>		
	    </ul>
	    <ul class="buttons">


			<?php
		
			if((!$id) &&( $_SESSION["userlevel"] == 100 )){		
				?>
			
		
			<li><button onclick="location.href='notice_form_list.php?page=<?=$page?>'">목록</button></li>
			<li><button onclick="location.href='notice_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
			<li><button onclick="location.href='notice_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
			<li><button onclick="location.href='notice_form.php'">글쓰기</button></li>
	<?php
	}else{
	?>


			<li><button onclick="location.href='notice_form_list.php?page=<?=$page?>'">목록
			</button></li>

			<li><button onclick="location.href='notice_form.php'">글쓰기</button></li>






<?php
}
?>

		</ul>
	</div> <!-- board_box -->
    



</body>
</html>