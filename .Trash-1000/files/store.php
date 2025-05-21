<?php
include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$gender = $_POST['gender'];
$interests = implode(", ", $_POST['interests']);
$country = $_POST['country'];
$message = $_POST['message'];

$sql = "INSERT INTO users (name, email, password, gender, interests, country, message) VALUES ('$name', '$email', '$password', '$gender', '$interests', '$country', '$message')";

if ($conn->query($sql) === TRUE) {

    header('Location: http://localhost/project/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>