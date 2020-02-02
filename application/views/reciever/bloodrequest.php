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
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/bbs/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/bbs/contact">Contact</a>
            </li> 
            </ul> 

          <ul class="nav navbar-nav ml-auto">          
            <li class="nav-item">
              <a class="nav-link"><?php
echo $_SESSION['username'];
?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/auth/logout">Log out</a>
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
<?php if(isset($_SESSION['success'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
<?php } ?>
</div>
<div class="col-lg-3"></div>
          <div class="col-lg-6">
<div class="jumbotron">
	<h1>Blood Request</h1>
	<hr>
	You Reuested for <h4><?php echo $_REQUEST['bg']; ?> Blood Group </h4> from <h4>
	<?php echo $_REQUEST['hname'] ?></h4> <hr>
  <?php $q=0 ?>

  <a href="<?php echo base_url(); ?>index.php/reciever/confirmrequest?hid=<?php echo $_REQUEST['hid'] ?>&rid=<?php
echo $_SESSION['username'];
?>&bg=<?php echo $_REQUEST['bg']; ?>&qty=<?php echo $q ?>" class="btn btn-danger btn-lg">Confirm</a>
</div>
</div>