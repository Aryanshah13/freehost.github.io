<?php
session_start();
include("connect.php");
error_reporting(0);
   if(isset($_POST['search']))

   {
    $reg_no= $_POST['reg_no'];
     $query = mysqli_query($connect, "SELECT * from student where reg_no='$reg_no' ");
     $query2 = mysqli_query($connect, "SELECT * from class where reg_no='$reg_no' ");
     $query3 = mysqli_query($connect, "SELECT * from fees where reg_no='$reg_no' ");


    while($row = mysqli_fetch_array($query) and $row2 = mysqli_fetch_array($query2) and $row3 = mysqli_fetch_array($query3))
    {
        ?>
        <!-- <form action="#" method="post">
                <input type="text" name="fname" value="<?php echo $row['fname']?>"/>
                <input type="text" name="faname" value="<?php echo $row['faname']?>"/>
                <input type="text" name="lname" value="<?php echo $row['lname']?>"/>
                <input type="number" name="class" value="<?php echo $row['class']?>"/>
                <input type="number" name="reg_no" value="<?php echo $row['reg_no']?>"/>
                <input type="number" name="class_no" value="<?php echo $row2['class_no']?>"/>
                <input type="text" name="division" value="<?php echo $row2['division']?>"/>
                <input type="number" name="tfees" value="<?php echo $row3['tfees']?>"/>
                <input type="number" name="fpaid" value="<?php echo $row3['fpaid']?>"/>
                <input type="number" name="fremain" value="<?php echo $row3['fremain']?>"/>

        </form> -->
        <table>
            <thead>
                <tr>
                    <th>
                        first name
                    </th>
                    <th>
                        father's name
                    </th>
                    <th>
                        last name
                    </th>
                    <th>
                         class
                    </th>
                    <th>
                        registeration  number
                    </th>
                    <th>
                        class number
                    </th>
                    <th>
                       division
                    </th>
                    <th>
                        total fees
                    </th>
                    <th>
                        fees paid
                    </th>
                    <th>
                        fees remaining
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                         <?php echo $row['fname']?>
                    </td>
                    <td>
                        <?php echo $row['faname']?>
                    </td>
                    <td>
                        <?php echo $row['lname']?>
                    </td>
                    <td>
                        <?php echo $row['class']?> 
                    </td>
                    <td>
                        <?php echo $row['reg_no']?>
                    </td>
                    <td>
                        <?php echo $row2['class_no']?>
                    </td>
                    <td>
                        <?php echo $row2['division']?>
                    </td>
                    <td>
                        <?php echo $row3['tfees']?>
                    </td>
                    <td>
                        <?php echo $row3['fpaid']?>
                    </td>
                    <td>
                        <?php echo $row3['fremain']?>
                    </td>
                </tr>
            </tbody>
        </table>
        <style>
        table,th, td {
  border: 1px solid black;
  background-color: white;
}
 body{
    background-color: darkcyan;
 }
    </style>
        <?php
    }

   }
?>