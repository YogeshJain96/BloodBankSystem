<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Blood Bank System</title>
 <link href="<?php echo base_url(); ?>assets/css/materia.css" rel="stylesheet">
</head>
<body>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
 -->

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
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/auth/login">Reciever Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/auth/register">Reciever Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/hospital/login">Hospital Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/hospital/register">Hospital Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link btn btn-secondary btn-md" style="color: red;" href="<?php echo base_url(); ?>index.php/welcome/availableblood"><b>Available Blood</b></a>
            </li> 
          
        </div>
      </div>
    </div>


    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Callibrating Space</h1><br><br>
          </div>