<?php
    $conn = mysqli_connect("localhost","root","","registration_form");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        $iregemail = $_POST['iregemail'];
        $iregpass = $_POST['iregpass'];
        
        $sql = mysqli_query($conn, "SELECT * FROM instructor where iregemail='$iregemail' and  iregpass='$iregpass'");
        $row = mysqli_fetch_array($sql);
        if(is_array($row))
        { 
            $_SESSION["ID"] = $row['ID'];
            $_SESSION["$iregemail"] = $row['iregemail'];
            $_SESSION["$iregpass"] = $row['iregpass'];

            header("Location: ../php/Instructor_home.php");
        }
        else
        {
            echo "Invalid Id or Password";
        }
    }
?>