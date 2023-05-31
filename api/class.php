<?php
    include("connect.php");
    error_reporting(0);
    $class_no = $_POST['class_no'];
    $division = $_POST['division'];
    $reg_no = $_POST['reg_no'];
    
    {
        $insert = mysqli_query($connect, "INSERT INTO class (class_no,division,reg_no)
        VALUES ('$class_no','$division','$reg_no')");
        if($insert){
            echo '
            <script>
                alert("Class added Successfull!");
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
    