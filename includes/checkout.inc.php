<?php

 include_once "dbh.inc.php";


///Search Function
 if(isset($_POST['searchBtn']))
{

  echo "search";
  $searchInput = $_POST['searchInput'];
  $sql ="SELECT * FROM `checkout_details` WHERE `fileNo`like'$searchInput';";
  $result= mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
      header("Location: ../checkout2.php?datasent=success&reason=$row[reason]&checkoutTo=$row[checkoutTo]&date=$row[date]&fileNo=$row[fileNo]&checkoutId=$row[checkoutId]");
    }
  }else {
    header("Location: ../checkout2.php?datasent=nodata");
  }


}
///Save function
if(isset($_POST['saveBtn']) )
{

  if (empty($_POST['date'])||empty($_POST['fileNo'])||empty($_POST['checkoutTo'])||empty($_POST['reason'])) {
  
      header("Location: ../checkout2.php?validation=fail");
  }else {
    $date =$_POST['date'];
    $fileNo =$_POST['fileNo'];
    $checkoutTo =$_POST['checkoutTo'];
    $reason =$_POST['reason'];

    $sql ="INSERT INTO `checkout_details`( `date`, `fileNo`, `checkoutTo`, `reason`)VALUES ('$date','$fileNo','$checkoutTo','$reason');";

    $save = mysqli_query($conn,$sql);
    if($save)
    {
        mysqli_close($conn); // Close connection
        header("Location: ../checkout2.php?datasent=success"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();

    }


  }
}
///Update function
if(isset($_POST['updateBtn']) )
{
  $checkoutId=$_POST['checkoutId'];
  $date =$_POST['date'];
  $fileNo =$_POST['fileNo'];
  $checkoutTo =$_POST['checkoutTo'];
  $reason =$_POST['reason'];
  $sql ="UPDATE `checkout_details` SET `date` = '$date', `fileNo` = '$fileNo', `checkoutTo` = '$checkoutTo', `reason` = '$reason' WHERE `checkoutId` ='$checkoutId' ;";
  $edit =   mysqli_query($conn,$sql);

   if($edit)
   {
       mysqli_close($conn); // Close connection
       header("Location: ../checkout2.php?dataUpdate=success"); // redirects to all records page
       exit;
   }
   else
   {
       echo mysqli_error();

   }

}
///Delete function

if(isset($_POST['deleteBtn']) )
{
  $checkoutId=$_POST['checkoutId'];
  $date =$_POST['date'];
  $fileNo =$_POST['fileNo'];
  $checkoutTo =$_POST['checkoutTo'];
  $reason =$_POST['reason'];
  $sql ="DELETE FROM `checkout_details` WHERE  `checkoutId` ='$checkoutId'";
  $delete =   mysqli_query($conn,$sql);

   if($delete)
   {
       mysqli_close($conn); // Close connection
       header("Location: ../checkout2.php?dataDelete=success"); // redirects to all records page
       exit;
   }
   else
   {
       echo mysqli_error();

   }

}
///clear function
if(isset($_POST['clearBtn']) )
{

  header("Location: ../checkout2.php?datasent=clear");
}
