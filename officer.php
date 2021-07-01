<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Officer</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body style="background-image: url('images/home_bg.jpg'); background-size: cover;background-attachment: fixed; background-size: 100% 100%;>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>




          <?php
           include_once 'navigation.php'
          ?>
          <div class="container">
                  <div class="row">
                      <div class="col-lg-6 m-auto">
                          <div class="card  mt-5">
                              <div class="card-title bg-primary text-white mt-5">
                                  <h4 class="text-center py-3">Login</h4>
                              </div>
                              <?php
                              if(@$_GET['Empty']==true)
                              {
                          ?>
                              <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                          <?php
                              }
                          ?>


                          <?php
                              if(@$_GET['Invalid']==true)
                              {
                          ?>
                              <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                          <?php
                              }
                          ?>

                              <div class="card-body">
                                  <form action="includes/loginProcess.inc.php" method="post">
                                      <input type="text" name="UName" placeholder=" User Name" class="form-control mb-3">
                                      <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                                      <button class="btn btn-success mt-3" name="Login">Login</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>




  </body>
</html>
