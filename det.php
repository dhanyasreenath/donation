<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Details</title>
    <style>

    

        
input[type="text"]{
height:30px;
width:350px;
border-radius: 9px;
}
input[type="text"]:focus{
  background-color:lightblue;
}
input[type="int"]{
height:30px;
width:350px;
border-radius: 9px;
}
input[type="submit"]{
height:30px;
width:200px;
border-radius: 9px;
background-color:rgb(199, 94, 94);
}
      
      </style>
</head>
<body>
<form action=" "method="post" >
  <center>
     <div class="sec">
     <h3>Add details</h3>
            <input type="text" name="type" placeholder="type"></br></br>
            <input type="text" name="code"placeholder="code"></br></br>
            <input type="text" name="description"placeholder="description"></br></br>
            <input type="int" name="ordder"placeholder="ordder"></br></br>
            <input type="text" name="language"placeholder="Laguage"></br></br>
            
            <input type="submit" name="add" value="add"></br>

       
     </div>
    </center>
</body>
</html>
<?php
include'db.php';
if(isset($_POST['add']))

{
$type=$_POST['type'];
$code=$_POST['code'];
$description=$_POST['description'];
$ordder=$_POST['ordder'];
$Language=$_POST['language'];


$sql="INSERT INTO user(type,code,description,ordder,Language)VALUES ('$type','$code','$description','$ordder','$Language')";
$result=mysqli_query($con,$sql);
if($result){
  $alert="<script >alert('Contact details has been saved successfully!'); </script>";
  echo $alert;
}}
?>