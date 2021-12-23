
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/board_form.css">
    <link rel="stylesheet" href="css/board_title_form.css">
    <link rel="stylesheet" href="css/mediascreen_board_form.css">

  
    <script src="js/board_modify_form.js"></script>
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

<?php    

    $num=$_GET["num"];
    $page=$_GET["page"];

   	$con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql    = "select * from board where num= $num";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

   
    $name = $row["name"];
    $subject=$row["subject"];
    $text_content= $row["text_content"];
    $file_name = $row["file_name"];

 
?>

         <!-- board 폼 부분. -->
        <div class="write">
            <div class="write_space1">
            </div>

            <div class="write_center">
              <h1>게시판  > 글수정하기</h1>


              <form action="board_modify.php?num=<?=$num?>&page=<?=$page?>" method="post" name="board_modify_form" enctype="multipart/form-data">
                <div class="write_center_name">
                    <h4>아이디   :</h4>
                    <h4><?php echo $userid?> </h4>
                </div>

                <div class="write_center_title">
                    <div class="write_center_title_title">
                        <h4>제목   :</h4>
                    </div>
                    <div class="write_center_title_input"> 
                        <input type="text" id="subject" name="subject" value="<?=$subject?>">
                    </div>
                </div>

                <div class="write_center_text">
                    <div class="write_center_text_text">
                        <h4>내용   :</h4>
                    </div>
                    <div class="write_center_title_textarea">
                        <textarea id="text_content" cols="100" rows="10" name="text_content"><?=$text_content?></textarea>
                    </div>
                </div>

                <div class="write_center_file">
                    <div class="write_center_file_title">
                        <h4>첨부파일   :</h4>
                    </div>     
                    <div class="write_center_file_file">  
                       <h3><?=$file_name?></h3>
                    </div>
                </div>

                <div class="buttons">
                    <button type="button" class="button1" onclick="check_input()">
                        <h3> 수정하기  </h3>  
                        
                    </button>
                    <button type="button" class="button2">
                        <a href="board_form_list.php"> 목록</a>                      
                    </button>
                </div>
              </form>
            </div>

            <div class="write_space2">
            </div>
        </div>
    </body>
</html>



