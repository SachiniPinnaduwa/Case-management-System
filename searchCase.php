<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Case</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <?php
       session_start();
       include_once 'authNavigation.php'
      ?>

    <section class="checkout-form mt-5">
          <div class="text-center">
              <h3>Search Case</h3>
          </div>
          
        <div class="form-container mt-5 " style="background-color: #e5e5e5; width: 100vw; margin-left:10px; margin-right:10px;  ">
          <div class="row  p-3 ">
            <div class="col-5">
            <div class ="res-tab">
              <form>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th>Case Number</th>
                      <th>S.N</th>
                      <th>C Type</th>
                      <th>P Name</th>
                      <th>Address</th>
                      <th>Solictior</th>

                    </tr>

                    <tr>
                        <td>
                            <span><input type="text" class="text-center" required="" placeholder=""></span>
                            <?php
                              if(@$_GET['datasent']==true&&$_GET['datasent']=="nodata"){
                                echo "<div class='alert-light text-danger text-center '> No data found</div> ";
                              }
                            ?>
                            <span><label> </label></span>
                        </td>

                        <div class="mb-3 row" hidden>
                          <label for="id" class="col-sm-3 col-form-label">CaseID :</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control"  name="id" value=<?php if(@$_GET['id']==true){ echo $_GET['id'];}else{echo "";} ?>>
                          </div>
                         </div>

                        <td>
                            <span><input type="text" class="text-center" required="" placeholder="" id="plantiff'sid" name="plantiff'sid" value=<?php if(@$_GET['id']==true){ echo $_GET['id'];}else{echo "";} ?>></span>
                            <span><label> </label></span>
                        </td>
                        <td>
                            <span><input type="text" class="text-center" required="" placeholder="" id="inputDate" name="date" value=<?php if(@$_GET['date']==true){ echo $_GET['date'];}else{echo "";} ?>>></span>
                            <span><label> </label></span>
                        </td>
                        <td>
                            <span><input type="text" class="text-center" required="" placeholder=""></span>
                            <span><label> </label></span>
                        </td>
                        <td>
                            <span><input type="text" class="text-center" required="" placeholder=""></span>
                            <span><label> </label></span>
                        </td>
                        <td>
                            <span><input type="text" class="text-center" required="" placeholder=""></span>
                            <span><label> </label></span>
                        </td>

                    </tr>

            

                  </tbody>
                  <br>
 
                </table>

    
              </form>

              <div class="col-sm-3">
                <input type="submit" name="searchBtn" value="Search"  class="btn btn-primary"></input>
              </div>
            </div> 
            </div>   
          </div>
     
    </section>
  </body>
</html>
