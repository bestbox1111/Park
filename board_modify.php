<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $text_content = $_POST["text_content"];
          
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "update board set subject='$subject', text_content='$text_content' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'board_form_list.php?page=$page';
	      </script>
	  ";
?>

   
