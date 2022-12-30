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

if(isset($_POST['submit']))
{
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $phoneno=$_POST['phone'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];
    

$sql_query=" INSERT INTO feed_back(first_name,last_name ,phone_no ,country,subject1)
VALUES( '$first_name','$last_name','$phoneno','$country','$subject')";

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