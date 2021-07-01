<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
    </head>
  <body style="background-image: url('images/home_bg.jpg'); background-size: cover;background-attachment: fixed; background-size: 100% 100%;">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <?php
       session_start();
       include_once 'authNavigation.php'
      ?>

<div class="container p-3 my-3 bg-black text-black text-center shadow p-4 mb-4 ">
  <h1>WELCOME..!</h1>
</div> 
  </body>
</html>
