<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New File</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <?php
       session_start();
       include_once 'authNavigation.php'
      ?>


    
    <section class="difendent's-form">
      <div class="text-center">
          <h3>Difendent's Information</h3>
      </div>
    <form action="includes/Difendents.inc.php" method="POST">
    <div class="form-container mt-3 " style="background-color: #e5e5e5; width: 100vw; margin-left:10px; margin-right:10px;  ">
          <div class="row  p-3 ">
          <div class="col-5 m-auto">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Name :</label>
                <div class="col-sm-6">
		            <input type="text" class="form-control" id="inputName" name="Name"><br />
                </div>
              </div>

            <div class="mb-3 row"> 
              <label for="inputPassword" class="col-sm-3 col-form-label">Address :</label>
              <div class="col-sm-6">
		          <input type="text" class="form-control" id="inputAddress" name="Address"><br />
              </div>
            </div>

            <div class="mb-3 row"> 
              <label for="inputPassword" class="col-sm-3 col-form-label">Solicitor :</label>
              <div class="col-sm-6">
		          <input type="text" class="form-control" id="inputSolicitor" name="Solicitor"><br />
              </div>
            </div>

            <div class="mb-3 row">
              <div class="col-sm-4">
              </div>
              <div class="col-sm-8">
              <button type="submit" name="Submit" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-secondary">Clear</button>
              </div>
            </div>
		
            </div>
          </div>
    </div>
		</form>
            
    </section>
   
  </body>
</html>
