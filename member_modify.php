<?php
    $id = $_GET["id"];

    $pass = $_POST["password"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
    $gender = $_POST["gender"];
    $location=$_POST["location"];
          
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "update members set password='$pass', name='$name' , email='$email', gender ='$gender',location = '$location'" ;
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'main.php';
	      </script>
	  ";
?>

   
