<?php
    $conn = mysqli_connect("localhost","root","","registration_form_students");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $sql = mysqli_query($conn, "SELECT * FROM regstudents where email='$email' and pass='$pass'");
        $row = mysqli_fetch_array($sql);
        if(is_array($row))
        { 
            $_SESSION["ID"] = $row['ID'];
            $_SESSION["$email"] = $row['email'];
            $_SESSION["$pass"] = $row['pass'];

            header("Location: ../php/Student_home.php");

            
        }
        else
        {
            echo "Invalid Id or Password";
        }
    }
?>