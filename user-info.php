<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "my_first_website";

$conn = mysqli_connect("$host","$username","$password","$database") or die("connection failed");


if(isset($_POST['btn-save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO user_info(name,email,phone,comments) VALUES('$name','$email','$phone','$comments')";
    $sql_run = mysqli_query($conn,$sql);
    header("location: index.php");
}

?>