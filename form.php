<?php
?>
<!Doctype html>
<html>
    <head>
        <Title></Title>
        <style>
           body{
            background: orange;
           }
           input{
            padding: 10px;
            border: 2px black solid;
            border-radius: 50px;
           }
        </style>
    </head>
    <body>
        <form action="dashboard.php" method="POST">
            <input placeholder="write your name" name="names" type="text"><br><br>
            <input placeholder="account balance" name="accountbalance" type="text"><br><br>
            <input placeholder="deposit" name="deposit" type="text"><br><br>
            <input type="submit" value="submit">
        </form>
        
    </body>
 </html>   
    