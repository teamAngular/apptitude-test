 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>numerical.php</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css"  href="css/custom.css">
    <link rel="stylesheet" type="text/css"  href="css/numerical.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
</head>
 
<?php 

$connection =  mysqli_connect("localhost","root","","test");
if(!$connection){
die("Could not connect");
}

// to change questions in each category
$change =$_GET['c'];
$query = "SELECT * FROM `question` WHERE category_id=$change";
$res= mysqli_query($connection , $query) or die(mysqli_error($connection));

//mysqli_fetch_assoc ( resource result)
//mysqli_fetch_assoc --  Returns an associative array that corresponds to the fetched row;
while ($results= mysqli_fetch_assoc($res)){
    $data[]= $results;
}
$num = 1;

// to fetch the multiple choice questions
function getChoice($id,$connection){
    $query = "SELECT * FROM `choice` WHERE question_id=$id";
    $res= mysqli_query($connection , $query) or die(mysqli_error($connection));
    
    while ($results= mysqli_fetch_assoc($res)){
        $data[]= $results;
    }
  return $data;
}

// to change the question title
$change =$_GET['c'];
$quey = "SELECT * FROM `category` WHERE category_id=$change";
 $res= mysqli_query($connection , $quey) or die(mysqli_error($connection));
 $re= mysqli_fetch_assoc($res);

//score sheet

if( $_SERVER['REQUEST_METHOD']=='POST' ){

  /* select correct answers from db */
  $sql='select answer from `choice`';
  $response = mysqli_query( $sql, $connection );
  echo "sql";

  /* store answers in an array for marking */
  $answers=array();
  $score=0;
  $index=0;

  /* populate the answers array */
  while( $results = mysql_fetch_object( $response ) ){
      $answers[]=$results;
  }
 
?>


<body>
<div class="container"> 

<div class="card-deck" style=" margin-top: 170px;  "> 
<div class="card"> 
  <div class="card border-primary mb-3" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
  <!-- title of quiz -->
  <div class="card-header"><?php echo $re['category_name'] ;?>
 
</div>
    <div class="card-body">
      <h5 class="card-title">Answer all Questions</h5>

      <!-- first loop -->
    <?php foreach($data as $question) {?>
      <p class="card-text"><?php echo $num . ")  " . $question['question'];?></p>
      <!-- //second loop -->
      <?php 
      $choices = getChoice($question['question_id'],$connection);
      foreach($choices as $choice){?>
      <form  action="score.php"  method="post">
           <input type="radio" name="choice"><?php echo $choice['choice_A'];?> <br>       
           <input type="radio" name="choice"><?php echo $choice['choice_B'];?> <br>          
           <input type="radio" name="choice"><?php echo $choice['choice_C'];?> <br>         
           <input type="radio" name="choice"><?php echo $choice['choice_D'];?> <br>
        </form>   
      <?php }?>
      
    <?php $num++;}  ?>
    
    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" >Submit</button>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        foreach( $_POST as $question => $answer ){
          echo $question.' '.$answer;
          if( $answer === $answers[ $index ] ) $score++;
          $index++;
      }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
  </div>
  </div>
</div>
</body>
</html>