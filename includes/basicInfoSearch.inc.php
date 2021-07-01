<?php

include_once "dbh.inc.php";

 $searchInput = $_POST['searchInput'];
 
 echo $searchInput;
 echo "<br/>";

 $sql ="SELECT * FROM `basic_infomation` WHERE `caseNo`like'%$searchInput%'";

 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
     //output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"]. " - MatterType: " . $row["matterType"]. " CaseNo: " . $row["caseNo"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  
  
 header("Location: ../searchCase.php?datasent=success");
 
