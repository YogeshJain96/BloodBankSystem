<div class="col-lg-2"></div><div class="col-lg-8">
<div class="jumbotron">
<h1>Reciever Registeration Form</h1><br>

<?php if(isset($_SESSION['success'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
<?php } ?>

<?php echo validation_errors('<div class="alert alert-warning">','</div>'); ?>

<form action="" method="POST">
  <fieldset>

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
    </div>

    <div class="form-group">
      <label for="phno">Phone Number</label>
      <input type="number" class="form-control" id="phno" name="phno" placeholder="Enter phone number" >
    </div>

    <div class="form-group">
      <label for="bg">Select Blood Group</label>
      <select class="form-control" id="bg" name="bg">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
    </div>

    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age"  name="age" placeholder="Enter Age" >
    </div>

    <div class="form-group">
      <label for="gender">Gender</label>
      <select class="form-control" id="gender" name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
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
    <button type="submit" class="btn btn-danger" name="register">Register</button>
    <hr>
              Already have an account <a href="<?php echo base_url(); ?>index.php/auth/login">login here !</a>
  </fieldset>
</form>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
</body>
</html> 