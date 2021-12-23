<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/main_part.css">
    <script src="https://kit.fontawesome.com/af86d9abf5.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>
</head>


        <div class="main_textcontent">
            <div class="latest">
                <h4>최근 게시글</h4>
            <ul>
                <li>
                    <span>*내용*</span>
                    <span>*이름*</span>
                    <span>*등록일*</span>
                </li>


<?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board order by num desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
            
            $name  = $row["name"];        
            $name = mb_substr($name, 0, 1)." * ".mb_substr($name, 2, 1);

            $regist_day = substr($row["regist_day"], 0, 10);
            
?>
              
                <li>
                    <span><a href="board_form_list.php?page=<?=$page?>"><?=$row["subject"]?></a></span>  
                    <span><?=$name?></span>
                    <span><?=$regist_day?></span>
                </li>
               
         
<?php
        }
    }
?>
              </div>
            <div class="point_rank">
                <h4>포인트 랭킹</h4>
                <ul>
<?php
    $rank = 1;
    $sql = "select * from members order by point desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "회원 DB 테이블(members)이 생성 전이거나 아직 가입된 회원이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
            $name  = $row["name"];        
            $id    = $row["id"];
            $point = $row["point"];
            $name = mb_substr($name, 0, 1)." * ".mb_substr($name, 2, 1);
?>
                <li>
                    <span><?=$rank?>위</span>
                    <span><?=$name?>&nbsp&nbsp님</span>
                    <span><?=$id?></span>
                    <span><?=$point?></span>
                </li>
       
<?php
            $rank++;
        }
    }

    mysqli_close($con);
?>
            </div>
        </div>


