<?php

include('database/connect.php');

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$message = $_POST['message'];

$name = mysqli_real_escape_string($con, $name);
$email = mysqli_real_escape_string($con, $email);
$mobile_number = mysqli_real_escape_string($con, $mobile_number);
$message = mysqli_real_escape_string($con, $message);

// Insert data into the database
$sql = "INSERT INTO `tbl_form_data`(`name`, `email`, `mobile_number`, `message`) VALUES ('$name','$email','$mobile_number','$message')";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Message sent successfully!')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>