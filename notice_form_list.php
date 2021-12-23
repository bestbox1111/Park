
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="css/notice_form.css">
    <link rel="stylesheet" href="css/notice_form_list.css">
    <link rel="stylesheet" href="css/mediascreen_notice_form_list.css">
 

    <script src="https://kit.fontawesome.com/af86d9abf5.js" crossorigin="anonymous"></script>
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


    <div class="write">
            <div class="write_space1">
           
            </div>
            <div class="write_center">
                <h1>공지사항  > 목록보기</h1>
                <ul id="board_list">
            	<li>
					<span class="col1">넘버</span>
					<span class="col2">제목</a></span>
					<span class="col3">이름</span>
				
					<span class="col5">등록일</span>
			
				</li>
               
                    <?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from notice order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["num"];
	  $id          = $row["id"];
	  $name        = $row["name"];
	  $subject     = $row["subject"];
      $regist_day  = $row["regist_day"];
 


?>
				<li>
					<span class="col1"><?=$number?></span>
					<span class="col2"><a href="notice_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
					<span class="col3"><?=$name?></span>
		
					<span class="col5"><?=$regist_day?></span>
				
				</li>	
<?php
   	   $number--;
   }
   mysqli_close($con);

?>
	    	</ul>
			<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='notice_form_list.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li><a href='notice_form_list.php?page=$i'> ",", $i </a><li>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo "<li> <a href='notice_form_list.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
			</ul> <!-- page -->	    	
			<ul class="buttons">
				<li><button onclick="location.href='notice_form_list.php'">목록</button></li>
				<li>
<?php 
    if($userlevel==100) {
?>
					<button onclick="location.href='notice_form.php'">글쓰기</button>
<?php
	} else {
?>
					<a href="javascript:alert('관리자만 이용이 가능합니다.!')"><button>글쓰기</button></a>
<?php
	}
?>
				</li>
			</ul>

            </div>
            <div class="write_space2">
                
            </div>

        </div>

    </div>
</body>
</html>