<?php
#a variable that holds the name reason 
$reason = $_POST['reason'];
#  mysqli_connect() opens a new connection to the mysql server
$connection =  mysqli_connect("localhost","root","","test");
if(!$connection){
    die("Could not connect");
    } 
# the variable reason is been asssigned to the value signup 
if ($reason=="signup"){
    #variables holding the 'names' of name
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$password = $_POST['pass'];
$username =  $_POST['uname']; 


$query ="INSERT INTO `user`(`firstname`, `lastname`, `username`, `password`) 
VALUES ('$firstname','$lastname','$username','$password')";

#mysqli_query(performs a query against the database)  mysqli_error(it returns the error desc for the last function call)  header()
$insert = mysqli_query($connection, $query) or die(mysqli_error($connection));
if($insert){
    #header( sends a raw http header to a client)
    header("location:login.php");
}

}



//login process

if($reason == "login"){
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $query="SELECT * FROM `user` WHERE username= '$username' AND password='$password' limit 1 ";

    $insert = mysqli_query($connection, $query) or die(mysqli_error($connection));
    #mysqli_num_rows(number of rows in a result set)
    $num = mysqli_num_rows($insert);

    if($num>0){
        header("location:options.php");
    }
    else{
        echo "invalid username or password";
    }



    
    
}








?>