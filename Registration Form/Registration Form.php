<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Register</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container2">
        <div class="form">
            <div class="instreg">
                <div class="inputfield">
                    <h1>Instructor Registration</h1>
                    <form action="regsitration_insert.php" method="post">
                        <input type="text" name="iregname" placeholder="Enter Name*" required>
                        <input type="email" name="iregemail" placeholder="Enter Email Address*" required>
                        <input type="password" name="iregpass" placeholder="Enter Password*" required>
                        <button type="submit" name="submit" class="subbtn">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="button">
            <a href="Instructor_login.php">
                <button type="button" class="btn">LOGIN</button>
            </a>
            <a href="home_registration_form.php">
                <button type="button" class="btn">HOME</button>
            </a>
        </div>
    </div>
</body>
</html>