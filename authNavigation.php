
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CASE MANAGEMENT SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" style="margin-left:100px;" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homePage.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="searchCase.php">Search Case</a>
      </li>
      
      
      
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            New File
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="basicInformation.php">Basic Information</a></li>
            <li><a class="dropdown-item" href="plantiff'sInformation.php">Plantiff's Information</a></li>
            <li><a class="dropdown-item" href="difendent'sInformation.php">Difendent's Information</a></li>
            <li><a class="dropdown-item" href="witness'sInformation.php">Witness's Information</a></li>
          </ul>
        </li>




      <li class="nav-item">
        <a class="nav-link" href="recordManager.php">Record Manager</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkin.php">Checkin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout2.php">Checkout</a>
      </li>
    </ul>
    <ul class="navbar-nav" style="margin-left:100px;" >
         <li class="nav-link">
           <?php
             
             echo 'Welcome  ' . $_SESSION['User']
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="includes/logout.inc.php?logout" style="color:blue;">logout</a>
        </li>
      </ul>
  </div>
</nav>

