<?php
$name=$_POST["names"];
$acctbal=$_POST["accountbalance"];
$dep=$_POST["deposit"];
?>
<!DOCTYPE html>
<html>
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
            width: 15%;
            text-align: center;
            padding: 7px;
        }
        h3{
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class=dashboard>
        <h3>FAIR FUND</h3>
        <h4>Welcome back,<?php echo $name ?></h4>
        <p>Account balance: <?php echo $acctbal?></p>
        <p>Deposit: <?php echo $dep?></p>
    </div>
</body>
</html>