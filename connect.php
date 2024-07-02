
<?php 


header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies


if(isset($_POST['submit']))
{
$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$msg = $_POST["msg"]; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarun";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="INSERT INTO contact (FirstName, LastName,Phone,mail,Massage)values('$fistname','$lastname','$mobile','$email','$msg')";

$result=mysqli_query($conn,$sql);
if($result){

     header("Location: contact");
     exit();
   
}
else{
  echo"Failed";
}

$sql->close();

}

// $sql->close();
// $conn->close();

?>

