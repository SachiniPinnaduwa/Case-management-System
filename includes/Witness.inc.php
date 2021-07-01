<?php

include_once "dbh.inc.php";
if(isset($_POST['Submit']))
        {

        	$name=$_POST['Name'];
        	$address=$_POST['Address'];
        	
        	//echo "data = $name $address ";
            
		 $sql="INSERT into `witness's`(`Name`,`Address`) VALUES('$name','$address') ";
         $result = mysqli_query($conn,$sql);
           
		 if($result)
		   {
            header("Location: ../witness'sInformation.php?datasent=success");
		   }
		   else
		   {
            header("Location: ../witness'sInformation.php?datasent=fail");
		   }
        }