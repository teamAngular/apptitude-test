<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>


<body>
    <div class="container">
        <form class="form" method="post" action="process.php">
        <input type="text" name="uname" placeholder="username" class="input"><br><br>
        <input type="password"  name="pass" placeholder="password" class="input"><br><br>
        <input type="submit" name="login" placeholder="login" value="logIn" class="input" ><br><br>
        <input type="hidden" name="reason" value="login">
        </form>
    </div>
    
</body>
</html>
