<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    if (!isset($_POST['S_NO'])) {
        die("Error: S_NO is missing from the form submission.");
    }

    $jobs_id = $_POST['S_NO'];
    $Fullname = $_POST['fname'];
    $mobile = $_POST['mobile']; // Ensure this is captured correctly
    $select = $_POST['selectjobs'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tarun";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Debugging: print submitted data
    echo "FirstName: $Fullname, Phone: $mobile, jobs: $select, Email: $email, Message: $msg <br>";

    // Ensure SQL column names match the database schema
    $stmt = $conn->prepare("UPDATE contact SET Fullname=?, Phone=?, jobs=?, mail=?, Massage=? WHERE S_No=?");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Ensure the bind_param types match the variables
    // The type definition string should be "sssssi" since you have 6 variables
    $stmt->bind_param("sssssi", $Fullname, $mobile, $select, $email, $msg, $jobs_id);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
        header("Location: show-data?UP+DT%?successFull");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
