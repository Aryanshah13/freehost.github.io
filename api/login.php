<?php
session_start();
include("connect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$check = mysqli_query($connect, "SELECT * FROM user3 WHERE email='$email' AND password='$password'");
if(mysqli_num_rows($check)>0){
    $user3data = mysqli_fetch_array($check);
    $_SESSION['user3data'] = $user3data;


    echo '
    <script>
        window.location = "../routes/dashboard.php";
    </script>
    ';
}
else{
    echo '
    <script>
        alert("Invalid Credentials or User not found!");
        window.location = "../login.html";
    </script>
    ';
}
?>