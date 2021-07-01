<?php

 include_once "dbh.inc.php";

 $caseNo =$_POST['caseNo'];
 $lowerCourt =$_POST['lowerCourt'];
 $lowerCourtNo =$_POST['lowerCourtNo'];
 $stampDuty =$_POST['stampDuty'];
 $natureOfCase =$_POST['natureOfCase'];
 $recieptNo =$_POST['recieptNo'];
 $prison =$_POST['prison'];
 $currentLocation =$_POST['currentLocation'];
 $recordRoom =$_POST['recordRoom'];
 $rackNo =$_POST['rackNo'];
 $counterNo =$_POST['counterNo'];
 $caseHistory =$_POST['caseHistory'];
 $fileActionHistory =$_POST['fileActionHistory'];
 $date =$_POST['date'];
 $caseState =$_POST['caseState'];
 $courtRoom =$_POST['courtRoom'];
 $nextStep =$_POST['nextStep'];
 $nextDate =$_POST['nextDate'];

 $sql ="INSERT INTO `case`( `caseNo`, `lowerCourt`, `lowerCourtNo`, `stampDuty`, `natureOfCase`, `recieptNo`, `prison`, `currentLocation`, `recordRoom`, `rackNo`, `counterNo`, `caseHistory`, `fileActionHistory`, `date`, `caseState`, `courtRoom`, `nextStep`, `nextDate`)VALUES ('$caseNo', '$lowerCourt', '$lowerCourtNo', '$stampDuty', '$natureOfCase', '$recieptNo', '$prison', '$currentLocation', '$recordRoom', '$rackNo', '$counterNo', '$caseHistory', '$fileActionHistory', '$date', '$caseState', '$courtRoom', '$nextStep', '$nextDate');";

 mysqli_query($conn,$sql);
 header("Location: ../recordManager.php?datasent=success");