<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>
    
    <div class="container">
<?php
include 'db.php';

if(isset($_POST['submit']))

{
$username=$_POST['uname'];
$password=$_POST['pwd'];

$sql="select * from login where username='".$username."'AND password='".$password."'limit 1";
$result=mysqli_query($con,$sql);
//$num=mysqli_fetch_array($result);
if($result->num_rows>0)
{
    echo"<h4>Successfully logged in</h4>";
    echo"<center></br>";
   echo' <input type="button" style="background-color:rgb(165, 164, 164);border-radius: 7px; width:520px;height:40px;"value="Add details"onclick="window.location=\'det.php\'"/>';
   echo"</br></br>";
   echo' <input type="button" style="background-color:rgb(165, 164, 164);border-radius: 7px; width:520px;height:40px;"value="Search"onclick="window.location=\'search1.php\'"/>';
  
   echo"</br><center>";



}
else{
    
    $alert="<script >alert('No User found !'); </script>";
    echo $alert;
}
}
?>
    </div>
</body>
</html>
    
    


