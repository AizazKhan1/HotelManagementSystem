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

if(isset($_POST['save']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phoneno=$_POST['Phoneno'];
    $email=$_POST['email'];
    $arrival=$_POST['Text'];
    $departure=$_POST['Text1'];
    $guests=$_POST['guests'];
    $roomtype=$_POST['roomtype'];

$sql_query=" INSERT INTO customer_info( first_name ,last_name ,phone_no ,email,Arrival_date,departure_date,no_guest,room_type)
VALUES( '$first_name','$last_name','$phoneno','$email','$arrival','$departure','$guests','$roomtype')";

if(mysqli_query($conn,$sql_query))
{
    // echo"New Details entry inserted successfully !"
    header('location:main.php');
}
else
{
    echo "Error:" .$sql ."".mysqli_error($conn);
}
mysqli_close($conn);
}


















?>
