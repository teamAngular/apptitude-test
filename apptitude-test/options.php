<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Options</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css"  href="css/options.css">
    <link rel="stylesheet" type="text/css"  href="css/custom.css">

</head>
<?php
$connection = mysqli_connect("localhost" ,"root" ,"" ,"test");
if(!$connection){
  die("could not connect");
}
$query = "SELECT * FROM `category`";
$res= mysqli_query($connection,$query) or die(mysqli_error($connection));

while ($results = mysqli_fetch_assoc($res)){
  $data[] = $results;
}


?>

<body>

<?php foreach($data as $value ){?>
<div class="container">
<div class="card-deck" style=" margin-top: 170px;  ">
  <div class="card border-primary mb-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="card-body">
      <h5 class="card-title"><?php echo $value['category_name'];?></h5>
      <p class="card-text">This test contains ten questions to test your problem solving skills.</p>
      <p class="card-text"><small class="text-muted">Try your hands</small></p>
      <a href="numerical.php?c=<?php echo $value['category_id'] ?>" class="btn btn-outline-primary" >Take Test</a>
    </div>
  </div>
</div>

<?php }  ?> 

  
<script src="css/bootstrap.min.js"></script>
</body>


</html>