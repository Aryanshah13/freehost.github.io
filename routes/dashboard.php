<?php
    session_start();
    if(!isset($_SESSION['user3data'])){
        header("location: ../login.html");

    }
?>
<html>
    <head>
        <title>Fees management system - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheeet.css">
    </head>
   
    <body>
    
    
    <style>
        #Backbtn{
    padding: 30px;
    border-radius: 10px;
    background-color:blue;
    color:white;  
    float:left;
    width:96%;
    font-size: 22px;
    font-family: cursive;
    margin-bottom: 1%;
}

    </style>
    <style>
        #Logoutbtn{
    padding: 30px;
    border-radius: 10px;
    background-color:blue;
    color:white;
    float:left;
    width: 96%;
    font-size: 18px;
    font-family: cursive;
 
}

    </style>
    <style>
        #Homebtn{
    padding: 30px;
    border-radius: 10px;
    background-color:blue;
    color:white;
    width: 96%;
    font-size: 20px;
    font-family: cursive;
}
    </style>
    <style>
        #Classbtn{
    padding: 30px;
    border-radius: 10px;
    background-color:blue;
    color:white;
    width: 96%;
    font-size: 20px;
    font-family: cursive;
   
}
    </style>
    <style>
        #Studentbtn{
    padding: 30px;
    border-radius: 10px;
    background-color:blue;
    color:white;
    width: 96%;
    font-size: 20px;
    font-family: cursive;
   
    }
    </style>
    <style>
        #Feesbtn{
    padding: 30px;
    border-radius: 10px;
    background-color:blue;
    color:white;
    width: 96%;
    font-size: 20px;
    font-family: cursive;
}
    </style>
    </style>
                   
    <div class="div"></div>
    <div id="mainSection">
        <div id="headerSection">
            <form action="../login.html" method="post">
                <button id="Backbtn" type="submit">Back</button><br><br>
            </form>
            <h1>Fees management Dasboard</h1><br>         
        </div>
        <hr>
    
        <hr class="h">
        <div id="Dasboard">
        <form action="#">
            <button id="homebtn">home</button><br><br>
           
        </form>
        </div>
        <div id="Dasboard">
        <form action="../routes/class.html" method="post">
            <button id="classbtn">class</button><br><br>
           
        </form>
        </div>
        <div id="Dasboard">
        <form action="../routes/student.html" method="post">
            <button id="studentbtn">Student</button><br><br>
        </form>    
        </div>
        <div id="Dasboard">
        <form action="../routes/fees.html" method="post">
            <button id="feesbtn">fees</button><br><br>
        </form>    
        </div>
        <div id="headerSection">
            <form action="signup.html" method="post">
            <button id="Logoutbtn" type="submit">Logout</button><br><br>
            </form>
    </div>
</div>
<h2>Universal College of Engineering</h2>
   </body>
<style>
    #searchbtn{
        padding: 1px;
    background-color:yellow;
    color:black;
    border-radius: 3px;
    margin-left: 170px;
    margin-top: -20px;

}
</style>
<style>
    #Group{
display:block;
margin-left: 820px;
margin-top: -510px;
}
</style>
<div id="Group">
    <form action="../api/search.php" method="post">
        <form action="#">
        <input type="number" name="reg_no" placeholder="enter registration number"><br>
        <button id="searchbtn" name="search" type="submit">search</button>
    </form>  
</div>
    
</html>