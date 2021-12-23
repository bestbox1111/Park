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
			게시판 > 내용보기
		</h3>
<?php

	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$text_content    = $row["text_content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copy  = $row["file_copy"];
	$hit          = $row["hit"];
	

	$text_content = str_replace(" ", "&nbsp;", $text_content);
	$text_content = str_replace("\n", "<br>", $text_content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
			</li>
			<li>
				<?php
					if($file_name) {
						$real_name = $file_copy;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       		<a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
			           	}
				?>
				<?=$text_content?>
			</li>		
	    </ul>
	    <ul class="buttons">


			<?php
		
			if($_SESSION["userlevel"] == 100 || $_SESSION["userid"]==$id){		
				?>
			
		
			<li><button onclick="location.href='board_form_list.php?page=<?=$page?>'">목록</button></li>
			<li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
			<li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
			<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
	<?php
	}else{
	?>


			<li><button onclick="location.href='board_form_list.php?page=<?=$page?>'">목록
			</button></li>

			<li><button onclick="location.href='board_form.php'">글쓰기</button></li>






<?php
}
?>

		</ul>
	</div> <!-- board_box -->
    



</body>
</html>