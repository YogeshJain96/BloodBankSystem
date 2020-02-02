<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-lg-12">

<div class="jumbotron">
  <h3>Blood Bank System</h3>
  <p class="lead">Solution &mdash; The Web App </p>
  <hr class="my-4">
  <div class="row">
<div class="col-lg-4">

	  <div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action active bg-danger">
		    Reciever
		  </a>
		  <a href="<?php echo base_url(); ?>index.php/auth/login" class="list-group-item list-group-item-action btn btn-danger">Log In
		  </a>
		  <a href="<?php echo base_url(); ?>index.php/auth/register" class="list-group-item list-group-item-action btn btn-danger">Register
		  </a>
	   </div>
</div>	

<div class="col-lg-4">

	  <div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action active bg-danger">
		    Hospital
		  </a>
		  <a href="<?php echo base_url(); ?>index.php/hospital/login" class="list-group-item list-group-item-action btn btn-danger">Log In
		  </a>
		  <a href="<?php echo base_url(); ?>index.php/hospital/register" class="list-group-item list-group-item-action btn btn-danger">Register
		  </a>
	   </div>
</div>	
<div class="col-lg-4">
	<div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action active bg-danger">
		    Features
		  </a>

		  <a href="<?php echo base_url(); ?>index.php/welcome/availableblood" class="list-group-item list-group-item-action btn btn-danger">Check Blood Available
		  </a>
		  <a class="list-group-item list-group-item-action">Request Blood
		  </a>
	   </div>
</div>
</div>

<hr>
<h3>Technology Stack</h3>
<div class="row">
<div class="col-lg-4">

	  <div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action active bg-danger">
		    Front End
		  </a>
		  <a class="list-group-item list-group-item-action">HTML5
		  </a>
		  <a class="list-group-item list-group-item-action">CSS3/Bootstrap(bootswatch.com/materia)
		  </a>
		  <a class="list-group-item list-group-item-action">JavaScript
		  </a>
	   </div>
</div>	
<div class="col-lg-4">

	  <div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action active bg-danger">
		    Back End
		  </a>
		  <a class="list-group-item list-group-item-action">PHP Framework-CodeIgniter
		  </a>
		  <a class="list-group-item list-group-item-action">Database-MYSQL
		  </a>
	   </div>
</div>	
<div class="col-lg-4">

  <p class="lead">
    <a class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>index.php/welcome/about" role="button">Learn more</a>
  </p>
</div>
</div>
</div>
</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>. Yogesh Jain | yogeshjain2096@gmail.com</p>
</div>
</body>
</html>