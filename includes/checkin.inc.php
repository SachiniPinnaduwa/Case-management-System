<?php

 include_once "dbh.inc.php";

 if(isset($_POST['saveBtn']) )
{

  if (empty($_POST['date'])||empty($_POST['fileNo'])||empty($_POST['currentLocation'])) {
  
      header("Location: ../checkin.php?validation=fail");
  }else {
    $date =$_POST['date'];
    $fileNo =$_POST['fileNo'];
    $currentLocation =$_POST['currentLocation'];
    

    $sql ="INSERT INTO `checkin_details`( `date`, `fileNo`, `currentLocation`)VALUES ('$date','$fileNo','$currentLocation');";

    $save = mysqli_query($conn,$sql);
    if($save)
    {
        mysqli_close($conn); // Close connection
        header("Location: ../checkin.php?datasent=success"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();

    }


  }
}
///clear function
if(isset($_POST['clearBtn']) )
{

  header("Location: ../checkin.php?datasent=clear");
}