<?php
    
    $fname=$_POST['firstName'];
    $lname=$_POST['lastName'];
    $phone=$_POST['phoneNumber'];
    $msg=$_POST['feedback'];

    $link=mysqli_connect("localhost", "root", "", "assignment3");

    if($link===false)
    {
        die("Error: Couldn't connect. " . msqli_connect_error());
    }

    $sql="INSERT INTO feedback (firstname,lastname,phone,feedback) VALUES ('$firstName', '$lastName','$phone', '$msg')";
    if(mysqli_query($link, $sql))
    {
        echo "Records added Successfully.";
    }
    else
    {
        echo "ERROR" . mysqli_error($link);
    }

    mysqli_close($link);
   
?>