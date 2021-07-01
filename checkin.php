<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CheckIn</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <?php
     session_start();
     include_once 'authNavigation.php'
    ?>

    <section class="checkin-form">
      <div class="text-center">
          <h3>Case Check In</h3>
      </div>
      <form  action="includes/checkin.inc.php" method="post">
        <div class="form-container mt-3 " style="background-color: #e5e5e5; width: 100vw; margin-left:10px; margin-right:10px;  ">
          <div class="row  p-3 ">
            <div class="col-5">
             <!-- Left side -->
             <div class="mb-3 row">
              <label for="Date" class="col-sm-3 col-form-label">Date :</label>
              <div class="col-sm-6">
                <input type="date" class="form-control" id="inputDate" name="date">
              </div>
           </div>
           <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-3 col-form-label">File No :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputFileNo" name="fileNo">
              </div>
           </div>
           <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Current Location :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputCurrentLocation" name="currentLocation">
              </div>
           </div>
           
            <div class="mb-3 row">
              <div class="col-sm-4">
              </div>
              <div class="col-sm-8">
              
              <input type="submit" name="saveBtn" value="Save"  class="btn btn-primary"></input>
              
              <input type="submit" name="clearBtn" value="Clear"  class="btn btn-secondary"></input>
              </div>
           </div>

           <?php
               if(@$_GET['validation']==true){
              echo "<div class='alert-light text-danger text-center '>All field should fill before save</div> ";
             }
             ?>
             
            </div>
            <div class="col-7 card">
              <div class="card-body">

             <!-- Right side -->
               <div class="table" style="background-color: #fff; border-radius: 8px; border:1px solid gray;">
                 <?php
                   include_once "includes/dbh.inc.php";
                   $sql= "SELECT*FROM checkin_details";

                   $quaryRun = mysqli_query($conn,$sql);
                   ?>
                  <table class="table">
              <thead>
                <tr>
                  <th scope="col">Date</th>
                  <th scope="col">File No</th>
                  <th scope="col">Current Location</th>
                </tr>
              </thead>
                <?php
                if ($quaryRun) {
                  foreach ($quaryRun as $row ) {
                ?>
                    <tbody>
                      <tr>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['fileNo']; ?></td>
                        <td><?php echo $row['currentLocation']; ?></td>
                       
                      </tr>
                    </tbody>
              <?php
               }
             }else {
               echo "No Record Found";
             }
           ?>
            </table>
          </div>
               </div>

            </div>

          </div>

        </div>
     </form>
    </section>


  </body>
</html>
