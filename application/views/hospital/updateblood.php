<!-- Add and Update Blood Info -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Blood Bank System</title>
 <link href="<?php echo base_url(); ?>assets/css/materia.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-danger">
      <div class="container">
        <a href="../" class="navbar-brand">Blood Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav"><li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/contact">Contact</a>
            </li> 
            </ul> 

          <ul class="nav navbar-nav ml-auto">          
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/hospital/profile"><?php
echo $_SESSION['username'];
?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/hospital/logout">Log out</a>
                </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Callibrating Space</h1><br><br>
          </div>
<div class="col-lg-12">
<div class="jumbotron">
<h1>Update Blood in Blood Bank</h1><br>


<?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>

<form action="" method="POST">
  <fieldset>
    <div class="form-group">
      <label for="hid">Hospital ID</label>
      <input type="text" class="form-control" id="hid" name="hid" disabled="" value="<?php
echo $_SESSION['hid'];
?>">
    </div>

    <div class="form-group">
      <label for="name">Hospital Name</label>
      <input type="text" class="form-control" id="hname" name="hname" placeholder="Enter Hospital Name" disabled="" value="<?php
echo $_SESSION['username'];
?>">
    </div>
    
    <div class="form-group">
      <label for="qty">Update Blood Quantites</label>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">A+</th>
      <th scope="col">A-</th>
      <th scope="col">B+</th>
      <th scope="col">B-</th>
      <th scope="col">AB+</th>
      <th scope="col">AB-</th>
      <th scope="col">O+</th>
      <th scope="col">O-</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-default">
      <td><input type="number" class="form-control" id="A+" name="A+" value="<?php echo $_SESSION['A+']; ?>"></td>
      <td><input type="number" class="form-control" id="A-" name="A-" value="<?php echo $_SESSION['A-']; ?>"></td>
      <td><input type="number" class="form-control" id="B+" name="B+" value="<?php echo $_SESSION['B+']; ?>"></td>
      <td><input type="number" class="form-control" id="B-" name="B-" value="<?php echo $_SESSION['B-']; ?>"></td>
      <td><input type="number" class="form-control" id="AB+" name="AB+" value="<?php echo $_SESSION['AB+']; ?>"></td>
      <td><input type="number" class="form-control" id="AB-" name="AB-" value="<?php echo $_SESSION['AB-']; ?>"></td>
      <td><input type="number" class="form-control" id="O+" name="O+" value="<?php echo $_SESSION['O+']; ?>"></td>
      <td><input type="number" class="form-control" id="O-" name="O-" value="<?php echo $_SESSION['O-']; ?>"></td>
    </tr>
  </tbody>
</table> 

  </div>

    <button type="submit" class="btn btn-danger" name="bregister">Update</button>
  </fieldset>
</form>
</div>
</div>
</div>
</div>
</body>
</html> 