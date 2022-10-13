<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container2">
        <div class="form">
            <div class="instreg">
            <div class="studreg">
                <div class="inputfield">
                    <h1>Students Registration</h1>
                    <form action="regsitration_insert_student.php" method="post">
                        <input type="text" name="name" placeholder="Enter Name*" required>
                        <input type="email" name="email" placeholder="Enter Email Address*" required>
                        <input type="password" name="pass" placeholder="Enter Password*" required>
                        <select name="class">
                            <option>-Select Class-</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                        <button type="submit" name="submit" class="subbtn">REGISTER</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="button">
        <a href="Student_login.php">
        <button type="button" class="btn">LOGIN</button>
        </a>
        <a href="home_registration_form.php">
        <button type="button" class="btn">HOME</button>
        </a>
        </div>
    </div>
</body>
</html>