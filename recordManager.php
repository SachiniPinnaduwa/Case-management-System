<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Case_Manager</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <?php
     session_start();
     include_once 'authNavigation.php'
    ?>

<section class="caseManage-form">
      <div class="text-center">
          <h3>Case Manager</h3>
      </div>

      
      <form  action="includes/recordManager.inc.php" method="post">
        
                 
             
        </div>
        <div class="form-container mt-3 " style="background-color: #e5e5e5; width: 100vw; margin-left:10px; margin-right:10px;  ">
          <div class="row  p-3 ">
            <div class="col-5">
             <!-- Left side -->
             <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Case No :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="caseNo" name="caseNo">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Lower Court :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="lowerCourt" name="lowerCourt">
                </div>
              </div>
           
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Lower Court No :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="lowerCourtNo" name="lowerCourtNo">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Stamp Duty (Rs) :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="stampDuty" name="stampDuty">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Nature of Case:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="natureOfCase" name="natureOfCase">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Reciept No :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="recieptNo" name="recieptNo">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Prison :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="prison" name="prison">
                </div>
              </div>


             
    
            </div>
            <div class="col-7 mt-3">
              <div class="col-8">

                <!-- Right side -->
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-3 col-form-label">Current location :</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="currentLocation" name="currentLocation">
                  </div>
                </div>

                <div class="mb-3 row">
                  <div class="row g-3">
                    <div class="col-md">
                      <div class="form-floating">
                          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="recordRoom">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          <label for="floatingSelectGrid">Record room</label>
                        </div>
                    </div>
                    <div class="col-md">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="rackNo">
                          <option selected></option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelectGrid">Rack No</label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="counterNo">
                          <option selected></option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelectGrid">Counter No</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="formGroupExampleInput" class="form-label">Case History</label>
                  <input type="text" class="form-control" id="caseHistory" name="caseHistory">
                </div>

                <div class="mb-3 row">
                  <label for="formGroupExampleInput" class="form-label">File Action History</label>
                  <input type="text" class="form-control" id="fileActionHistory" name="fileActionHistory">
                </div>

               </div>

            </div>
          <!-- bottom -->
            <div class="col mt-4">
              <div class="row g-5">

                <div class="col-md">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingInputGrid" name="date">
                    <label for="floatingInputGrid">Date</label>
                  </div>
                </div>

                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="caseState">
                    <label for="floatingInputGrid">Case State</label>
                  </div>
                </div>

                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name= "courtRoom">
                    <label for="floatingInputGrid">Court Room</label>
                  </div>
                </div>

                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name= "nextStep">
                    <label for="floatingInputGrid">Next Step</label>
                  </div>
                </div>

                <div class="col-md">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingInputGrid" name= "nextDate">
                    <label for="floatingInputGrid">Next Date</label>
                  </div>
                </div>

              </div>
            </div>

            
          </div>
          <div class="col mt-4">
          <div class="mb-3 row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-8">
                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                  <button type="button" class="btn btn-secondary">Clear</button>
                </div>
              </div>
              
          </div>
        </div>
     </form>
    </section>


  </body>
</html>
