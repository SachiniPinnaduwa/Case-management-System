<?php

include_once "dbh.inc.php";
if(isset($_POST['Submit']))
        {

        	$name=$_POST['Name'];
        	$address=$_POST['Address'];
        	$solicitor=$_POST['Solicitor'];
        	//echo "data = $name $address $solicitor";
            
		 $sql="INSERT into `difendent's`(`Name`,`Address`,`Solicitor`) VALUES('$name','$address','$solicitor') ";
         $result = mysqli_query($conn,$sql);
           
		 if($result)
		   {
            header("Location: ../difendent'sInformation.php?datasent=success");
		   }
		   else
		   {
            header("Location: ../difendent'sInformation.php?datasent=fail");
		   }
        }