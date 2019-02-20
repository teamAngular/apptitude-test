<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>


<body>
    <div class="container">
        <form class="form" method="post" action="process.php">
        <div >
            <input type="text" name="fname" placeholder="Firstname"class="input" ><br><br>
            <input type="text"  name="lname" placeholder="Lastname"class="input" ><br><br>
            <input type="text" name="uname" placeholder="Username"class="input" ><br><br>
            <input type="password" name="pass" placeholder="password"class="input"><br><br>
            <input type="submit" name="sign" placeholder="" value="Signup" class="input"><br><br>
            <input type="hidden" name="reason" value="signup">

        </div>
        </form>
    </div>
    
</body>
</html>
