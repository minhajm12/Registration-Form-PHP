<?php
if(isset($_POST['iregname']) &&
   isset($_POST['iregemail']) &&
   isset($_POST['iregpass']))
{
    include "../registration_insert.php";
    $iregname=$_POST['iregname'];  
    $iregemail=$_POST['iregemail'];  
    $iregpass=$_POST['iregpass'];

    $data = "iregname= ".$iregname."&iregemail=".$iregemail;
    
    if(empty($iregname))
    {
        $em = "Full Name is Required";
        header("Location: ../Index.php?error=$em&$data");
        exit;
    }
    else if(empty($iregemail))
    {
        $em = "User Name is Required";
        header("Location: ../Index.php?error=$em&$data");
        exit;
    }
    else if(empty($iregpass))
    {
        $em = "Password is Required";
        header("Location: ../Index.php?error=$em&$data");
        exit;
    }
    else
    {
        $iregpass = password_hash($iregpass, PASSWORD_DEFAULT);

        header("Location: ../Registration Form.php?success=Your account has been created successfully");
        exit;
    }
    
    
}
    else{
        header("Location: ../Registration Form.php?error=erorr");
    }


?>