<?php
session_start();
$firstname="";
$secondname="";
$email="";
$phonenumber="";
$password="";
if(isset($_POST["fname"])){
    $firstname=$_POST["fname"];
}
if(isset($_POST["lname"])){
    $secondname=$_POST["lname"];
}
if(isset($_POST["email"])){
    $email=$_POST["email"];
}
if(isset($_POST["pnumber"])){
    $phonenumber=$_POST["pnumber"];
}
if(isset($_POST["password"])){
    $password=$_POST["password"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            background: orange;
            font-family: arial;
           }
        .dashboard{
            background: black;
            color: white;
            border-radius: 15px;
            width: 50%;
            text-align: center;
            padding: 7px;
        }
        h3{
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="dashboard">
        <h1>first name = <?php echo $firstname ?></h1>
        <h1>second name = <?php echo $secondname?></h1>
        <h1>email = <?php echo $email?></h1>
        <h1>phone number= <?php echo $phonenumber?></h1>
        <h1>password = <?php echo $password?></h1>
    </div>
</body>
</html>