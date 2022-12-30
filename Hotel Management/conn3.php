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

if(isset($_POST['register']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phoneno=$_POST['Phoneno'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    

$sql_query=" INSERT INTO Employee_info( first_name ,last_name ,phone_no ,email,gender,city,country)
VALUES( '$first_name','$last_name','$phoneno','$email','$gender','$city','$country')";

if(mysqli_query($conn,$sql_query))
{
    // echo"New Details entry inserted successfully !"
    
    header('location:admin.php');
}
else
{
    echo "Error:" .$sql ."".mysqli_error($conn);
}
mysqli_close($conn);
}



?>
