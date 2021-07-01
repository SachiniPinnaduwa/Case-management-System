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
      header("Location: ../searchCase.php?datasent=success&reason=$row[reason]&checkoutTo=$row[checkoutTo]&date=$row[date]&fileNo=$row[fileNo]&checkoutId=$row[checkoutId]");
    }
  }else {
    header("Location: ../searchCase.php?datasent=nodata");
  }
