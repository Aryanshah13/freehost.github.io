<?php
    include("connect.php");
    error_reporting(0);
    $fname = $_POST['fname'];
    $faname = $_POST['faname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];
    $reg_no = $_POST['reg_no'];
    {
        $insert = mysqli_query($connect, "INSERT INTO student (fname,faname,lname,class,reg_no)
        VALUES ('$fname','$faname','$lname','$class','$reg_no')");
        if($insert){
            echo '
            <script>
                alert("Student added Successfull!");
                window.location = "../routes/dashboard.php";
            </script>
    
        ';

        }
        else{
            echo '
            <script>
                alert("Some error occured!");
                window.location = "../routes/dashboard.php";
            </script>
            ';
        }
    }
    