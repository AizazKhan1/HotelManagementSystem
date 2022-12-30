<?php 
$servername="localhost";
$username="root";
$password="";
$databasename="Hotel_Management_system";

$conn=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
    die("connection failed:" .mysqli_connect_error());
}

if(isset($_POST['enter']))
{
    $food=$_POST['food'];
    $price=$_POST['Price'];
    
    

$sql_query=" INSERT INTO menu( Food_name,Price )
VALUES( '$food','$price')";

if(mysqli_query($conn,$sql_query))
{
    echo"New Details entry inserted successfully !",
    header('location:admin.php');
}
else
{
    echo "Error:" .$sql ."".mysqli_error($conn);
}
mysqli_close($conn);
}



?>
