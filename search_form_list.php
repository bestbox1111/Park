<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="css/search_form2.css">
    <script src="https://kit.fontawesome.com/af86d9abf5.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/search_form.js"></script>

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
            <div class="write_title">
                <h1>검색하기</h1>
            </div>
                   

            <div class="search_box">
                <div class="search_category">
                    <form action="search_form.php" method="post" name="search_insert">
                        <input type="hidden" >
                        <select name="category" id="category">
                            <option value="ids"  selected>아이디</option>
                            <option value="names">이름</option>
                        </select>
              
                        <input type="text"  name="search"  value="" id="search_content" >
                        <button onclick="check_input()">검색</button  >
                   </form>
                </div>
            </div>


            <ul id="board_list">
                        <li>
                            <span class="col1">넘버</span>
                            <span class="col2">제목</a></span>
                            <span class="col3">아이디</a></span>
                            <span class="col4">이름</span>
                            <span class="col5">첨부</span>
                            <span class="col6">등록일</span>
                            <span class="col7">조회수</span>
                        </li>

    <?php
    $num=$_GET["num"];
    $page=$_GET["page"];


    $selectOption = $_GET["category"];
    $search = $_GET["search"];



    if(isset($_GET['category'])){
        switch($selectOption){  
            case "ids":
                $con = mysqli_connect("localhost", "user1", "12345", "sample");
                $sql = "select * from board WHERE id like '%$search%'";
                break;
            case "names":
                $con = mysqli_connect("localhost", "user1", "12345", "sample");
                $sql = "select * from board WHERE name like '%$search%'";
                break;
        }
    }else{
        switch($selectOption){  
        case "ids":
            $con = mysqli_connect("localhost", "user1", "12345", "sample");
            $sql = "select * from board WHERE id like '%$search%'";
            break;
        case "names":
            $con = mysqli_connect("localhost", "user1", "12345", "sample");
            $sql = "select * from board WHERE name like '%$search%'";
            break;
    }

    }





	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

      
    // if(isset($get['category'])){
    //     switch($selectOption){
    //         case "ids":
    //             $con = mysqli_connect("localhost", "user1", "12345", "sample");
    //             $sql = "select * from board WHERE  id like '%$search%'";
    //             break;
    //         case "names":
    //             $con = mysqli_connect("localhost", "user1", "12345", "sample");
    //             $sql = "select * from board WHERE  name like '%$search%' ";
    //             break;
    //     }
    // }else{
    // }

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
    //   $row = mysqli_fetch_array($result);



 

    
    //   // 하나의 레코드 가져오기

    $row    = mysqli_fetch_array($result);

    $num = $row["num"];
    $name = $row["name"];
    $id = $row["id"];
    $subject=$row["subject"];
    $text_content= $row["text_content"];
    $regist_day= $row["regist_day"];
    $file_name = $row["file_name"];
    $hit = $row["hit"];

      if ($row["file_name"])
      	$file_image = "<img src='./img/file.gif'>";
      else
      	$file_image = " ";
?>


                <li>
					<span class="col1"><?=$num?></span>
					<span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
					<span class="col3"><?=$id?></span>
                    <span class="col4"><?=$name?></span>
					<span class="col5"><?=$file_image?></span>
					<span class="col6"><?=$regist_day?></span>
					<span class="col7"><?=$hit?></span>
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
		echo "<li><a href='board_form_list.php?page=$new_page'>◀ 이전</a> </li>";
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
			echo "<li><a href='board_form_list.php?page=$i'> ",", $i </a><li>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo "<li> <a href='board_form_list.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>




        </div>
        <div class="write_space2">
        </div>
    </div>
    </body>
</html>

