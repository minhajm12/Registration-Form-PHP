<?php

$conn = mysqli_connect("localhost","root","","registration_form_students");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $class = $_POST['class'];

    
    $sql = "INSERT INTO regstudents (name, email, pass, class) VALUES ('$name','$email','$pass','$class')";

    if(mysqli_query($conn,$sql))
    {   
        echo "worked";
        header("Location: Student_login.php");
    }
    else
    {
        echo "ERROR: hush! Sorry" . $sql 
            . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>