<?php
$conn = new mysqli("localhost", "root", "", "form_data");


$fullname = $_POST['name'];
$email = $_POST['email'];
$bio = $_POST['message'];
$gender = $_POST['gender'];
var_dump($_POST['interests']);
$hobbies = implode(", ", $_POST['interests']);
$password = $_POST['password'];


$sql = "INSERT INTO users (fullname, email, bio, gender, password, interests)
       VALUES ('$fullname','$email','$bio','$gender','$password', '$hobbies')";


$conn->query($sql);
echo "Data inserted successfully. <a href='display.php'>View Data</a>";
header("Location: display.php");
?>
