<?php
$carnames=["venza","benz","bmw","audi"];
$userinput=$_POST["carname"];
if ($userinput == $carnames[1]){
    echo "car name is correct";
}else{
    echo "incorrect car name";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input placeholder="enter the name of a car" name="carname" type="text"><br><br>
        <input type="submit" value=" check">
    </form>
</body>
</html>