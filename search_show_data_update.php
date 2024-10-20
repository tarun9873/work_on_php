<?php 
  $jobs_id = $_POST['S_NO'];
 $Fullname = $_POST["fname"];
 $mobile = $_POST["mobile"];
 $select = $_POST["sjobs"];
 $email = $_POST["email"];
 $msg = $_POST["msg"];  

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "tarun";

 $conn = mysqli_connect($servername, $username, $password, $dbname);

 $sql = "INSERT INTO contact  (Fullname, Phone, jobs,  mail, Massage) 
            VALUES ('$Fullname',  '$mobile', '$select','$email', '$msg')";

$result = mysqli_query($conn,$sql) or die ("sql connection  Failed") ;
header("Location: index");
mysqli_close($conn);
?>