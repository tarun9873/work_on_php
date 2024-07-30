<?php 
// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit']))
{
    $Fullname = $_POST["fname"];
    $mobile = $_POST["mobile"];
    $select = $_POST["selectjobs"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];  

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tarun";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Debugging: print submitted data
    // echo "FirstName: $Fullname,  Phone: $mobile, jobs: $select,: Email: $email, Message: $msg <br>";

    $sql = "INSERT INTO contact  (Fullname, Phone, jobs,  mail, Massage) 
            VALUES ('$Fullname',  '$mobile', '$select','$email', '$msg')";

    // Debugging: print SQL query
    echo "SQL Query: $sql <br>";

    if (mysqli_query($conn, $sql)) {
        header("Location: contact?=?successFull");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
