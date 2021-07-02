<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">    
    <title>Basic Information</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <script>
                  

                    function validateForm() {
                    const matterType = document.forms["basicForm"]["matterType"].value;
                    const numberingYear= document.forms["basicForm"]["numberingYear"].value;
                    const autoId= document.forms["basicForm"]["autoId"].value;
                    const registeredDate= document.forms["basicForm"]["registeredDate"].value;
                    if (matterType == "") {
                        alert("Name must be filled out");
                        return false;
                    }
                    if (numberingYear == "") {
                        alert("Name must be filled out");
                        return false;
                    }
                    if (autoId == "") {
                        alert("Name must be filled out");
                        return false;
                    }
                    if (registeredDate == "") {
                        alert("Name must be filled out");
                        return false;
                    }
                    const caseNo = matterType+"/"+numberingYear+"/"+autoId
                
                    document.forms["basicForm"]["caseNo"].value = caseNo
                    
                     return true;
                    
                    }
                    </script>
</head>



<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <?php
     session_start();
     include_once 'authNavigation.php'
    ?>
  
      
    
    <section class="basicInfo-form">
        <div class="text-center">
          <h3>Basic Information</h3>
        </div>
        <Form name="basicForm" action="includes/basicInformation.inc.php" onsubmit="return validateForm()" method="POST">
        <div class="form-container mt-3 " style="background-color: #e5e5e5; width: 100vw; margin-left:10px; margin-right:10px;  ">
            <div class="row  p-3 ">
            <div class="col-5 m-auto">
             
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label" >Matter Type :</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="matterType" id="matterType">
                            <option selected> criminal appeal</option>
                            <option > Civil appeal</option>
                            <option > Writ application</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label" >Numbering year :</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="numberingYear" id="numberingYear">
                            <option selected> 2015 </option>
                            <option > 2016</option>
                            <option > 2017</option>
                            <option > 2018</option>
                            <option > 2019</option>
                            <option > 2020</option>
                            <option > 2021</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="Date" class="col-sm-3 col-form-label">Registered Date :</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="inputDate" name="registeredDate">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Case No :</label>
                     <?php
                        include_once "includes/dbh.inc.php";
                        $sql = "SHOW TABLE STATUS LIKE 'basic_infomation'";
                        $result=mysqli_query($conn,$sql);
                        $row = $result->fetch_assoc();

                     
                    
                    ?>
                    

                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="inputCaseNo"  name="caseNo">
                    </div>
                    <div class="col-sm-3">
                    <button  name="generate" class="btn btn-primary" onsubmit="return GenerateCaseNo()">Generate</button>
                    </div>
                    <div>
                    <input type="hidden" id="autoId" name="autoId" value=<?php echo $row['Auto_increment'];?>>
                   </div>
                    
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary">Clear</button>
                    </div>
                </div>
                <?php
                              if(@$_GET['datasent']==true)
                              {
                          ?>
                              <div class="alert-light text-success text-center py-3">Case number : <?php echo $_GET['datasent'] ?></div>
                          <?php
                              }
                          ?>
            </div>
            </div>
        </div>
    </Form>
    </section>
</body>
</html>
