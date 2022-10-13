<?php

$conn = mysqli_connect("localhost","root","","registration_form");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    $iregname=$_POST['iregname'];
    $iregemail=$_POST['iregemail'];
    $iregpass=$_POST['iregpass'];

    
    $sql = "INSERT INTO instructor (iregname, iregemail, iregpass) VALUES ('$iregname','$iregemail','$iregpass')";

    if(mysqli_query($conn,$sql))
    {
        header("Location: Instructor_login.php");
    }
    else
    {
        echo "ERROR: hush! Sorry" . $sql 
            . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>