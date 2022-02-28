<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input[type=text]{
            transition:width 0.4s ease-in-out;
            height:30px;
        }
        input[type=text]:focus{
        
        width:100%;}
 
      
        .container{
            width:500px;
            height:100px;
           
        }
        .item1{grid-area:type;}
.item2{grid-area:code;}
.item3{grid-area:description;}
.item4{grid-area:order;}
.item5{grid-area:language;}
.item6{grid-area:update;
    display:flex;
justify-content:center;
align-items:center;
}
.item7{grid-area:delete;
display:flex;
justify-content:center;
align-items:center;
}



.grid-container{
    display:grid;
    grid-template-areas:
    'type  description description code update delete'
    'type  description description order update delete'
    'type  description description language update delete';
    gap:10px;
    padding:10px;
  
    background-color:rgb(94,95,95);
}
.grid-container>div{
    background-color:rgb(255,255,255,0.8);
    text-align:left;
    padding:20px 0;
    font-size:20px;

}
input{

    border-color:red;
}

        </style>
</head>
<body>
    <center>
    <div class="container">
<form action=""method="post" >
<input type="text"  name="key"placeholder="Search here..">
        </div>
    </center>
    <?php
include 'db.php';

if(isset($_POST['key']))
{
$id=$_POST['key'];
$query="SELECT *FROM user WHERE (type='$id') OR (code='$id') OR (description='$id')OR (ordder='$id')OR (Language='$id')";
$query_run=mysqli_query($con,$query);
if($query_run->num_rows > 0){
	
  // output data of each row
  while($row=mysqli_fetch_assoc($query_run)) {
    echo'<div class="grid-container">';
 echo'<div class="item1">type:'.$row["type"].'</div>';
  echo'<div class="item2">code:'.$row["code"].'</div>';
  echo'<div class="item3">description:'.$row["description"].'</div>';
  echo'<div class="item4">order:'.$row["ordder"].'</div>';
  echo'<div class="item5">language:'.$row["Language"].'</div>';
  echo'<div class="item6"><button>Update</button></div>';
  echo'<div class="item7"><button>Delete</button></div>';
echo'</div>';}}
	else {
  echo '<script>

  alert("sorry no results!!");

</script>';
}

}
?>  
</body>
</html>
