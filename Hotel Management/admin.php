
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<style>


body{
    background-color: cornflowerblue;
}
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button1:hover {
  background-color: #008CBA;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
.alig{
display: flex;
justify-content:center;
align-items: center;
margin-top: 250px;

}
</style>
</head>

<body>
<div class="alig">


<a href="employee.html"><button class="button button1">Add Employee</button></a>
<a href="food.html"><button class="button button2">Add Food</button></a>
</div>
</body>
</html>