<create by github ninamohammed >
  <!DOCTYPE html>
<html lang="en">
<head>
    <title>Result</title>
    <style>
body {
  background-image: url('sensor.png');
}
</style>
</head>
 <body>
 <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="senval";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo " No value entered, please enter a value ";
                    
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "  The value is : " . $_GET['value'];
                    echo " Successfully submit";
                   }
                   @$query= "INSERT INTO sensorvalues VALUES($value)" ;
                   $run=mysqli_query($conn, $query);
                ?>

</body>
</html>