<!-- hospital registration page -->
<div class="col-lg-2"></div><div class="col-lg-8">
<div class="jumbotron">
<h1>Hospital Registration Form</h1><br>

<?php if(isset($_SESSION['success'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
<?php } ?>

<?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>

<form action="" method="POST">
  <fieldset>

    <div class="form-group">
      <label for="name">Hospital Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Hospital Name">
    </div>

    <div class="form-group">
      <label for="phno">Phone Number</label>
      <input type="number" class="form-control" id="phno" name="phno" placeholder="Enter phone number" >
    </div>

    <div class="form-group">
      <label for="add">Address</label>
      <textarea class="form-control" id="add"  name="add" placeholder="Enter address" rows="2"></textarea>
    </div>


    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
    </div>
    <div class="form-group">
      <label for="pass">Password</label>
      <input type="password" class="form-control" id="pass"  name="pass" placeholder="Password" >
    </div>

    <div class="form-group">
      <label for="pass2">Confirm Password</label>
      <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password" >
    </div>
    <button type="submit" class="btn btn-danger" name="hregister">Register</button>
    <hr>
              Already have an account <a href="<?php echo base_url(); ?>index.php/hospital/login">login here !</a>
  </fieldset>
</form>
</div>
</div>
</div>
</div>
</body>
</html> 