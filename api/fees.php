<?php
    include("connect.php");
    error_reporting(0);
    $fpaid = $_POST['fpaid'];
    $fremain = $_POST['fremain'];
    $reg_no = $_POST['reg_no'];
    $tfees = $_POST['tfees'];
    {
        $insert = mysqli_query($connect, "INSERT INTO fees (fpaid,fremain,reg_no,tfees)
        VALUES ('$fpaid','$fremain','$reg_no','$tfees')");
        if($insert){
            echo '
            <script>
                alert("fees added Successfull!");
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
    