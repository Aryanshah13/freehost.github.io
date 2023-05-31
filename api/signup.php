<?php
    include("connect.php");
    error_reporting(0);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password==$cpassword)
    {
        $insert = mysqli_query($connect, "INSERT INTO user3 (name,email,password)
        VALUES ('$name','$email','$password')");
        if($insert){
            echo '
            <script>
                alert("Signup Successfull!");
                window.location = "../login.html";
            </script>
    
        ';

        }
        else{
            echo '
            <script>
                alert("Some error occured!");
                window.location = "../routes/signup.html";
            </script>
            ';
        }
    }
    else{
        echo '
            <script>
                alert("Password and Confirm password doesnot match!");
                window.location = "../routes/signup.html";
            </script>
            ';
    }
        ?>