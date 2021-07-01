<?php
require_once('dbh.inc.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:../officer.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from users where userName='".$_POST['UName']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:../homePage.php?");
            }
            else
            {
                header("location:../officer.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working';
    }

?>
