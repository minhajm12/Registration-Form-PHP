<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <title>Instructor Login</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container3">
        <div class="form">
            <div class="instlogin">
                <h1>Instructor Login</h1>
                <form action="php/registration_database.php" method="post">
                    <input type="text" name="iregemail" placeholder="Enter Username or Email*" 
                    value="<?php echo (isset($_GET['iregemail']))? $_GET['iregemail']:"" ?>">
                    <input type="password" name="iregpass" placeholder="Enter Password*">
                    <button type="submit" class="subbtn">LOGIN</button>
                </form>
            </div>
        </div>
        <div class="button">
            <a href="Registration Form.php">
                <button type="button" class="btn">REGISTER</button>
            </a>
            <a href="home_registration_form.php">
                <button type="button" class="btn">HOME</button>
            </a>
        </div>
    </div>
</body>
</html>