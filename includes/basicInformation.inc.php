<?php

 include_once "dbh.inc.php";

 $matterType =$_POST['matterType'];
 $numberingYear =$_POST['numberingYear'];
 $registeredDate =$_POST['registeredDate'];
 $caseNo =$_POST['caseNo'];
 
 echo $matterType ,$numberingYear,$registeredDate,$caseNo;
 $sql ="INSERT INTO `basic_infomation`( `matterType`, `numberingYear`, `registeredDate`, `caseNo`)VALUES ('$matterType','$numberingYear','$registeredDate','$caseNo');";

 mysqli_query($conn,$sql);
 header("Location: ../basicInformation.php?datasent=$caseNo");