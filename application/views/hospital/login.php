<!-- hospital login page -->
<div class="col-lg-3"></div>
          <div class="col-lg-6">
<div class="jumbotron">
<h1>Hospital Login Form</h1><br>

<?php if(isset($_SESSION['success'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
<?php } ?>

<?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>

<form action="" method="POST">

<form>
  <fieldset>
    <div class="form-group">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Your Password">
    </div>
    <button type="submit" class="btn btn-danger" name="hlogin">Login</button> <hr>
              If you are a new user, You can <a href="<?php echo base_url(); ?>index.php/hospital/register">Register here !</a>
  </fieldset>
</form>
</div>
</div>
</div>
</body>
</html>