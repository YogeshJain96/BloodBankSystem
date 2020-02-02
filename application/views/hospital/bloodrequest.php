<!-- View Blood Requests -->
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
          <div class="col-lg-2"></div>
<div class="col-lg-8">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">Blood Requests</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Reciever</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php
$a=1;
        $h=$_SESSION['hid'];
        $this->db->select('*');
        $this->db->from('bloodrequests');
        $this->db->where(array('hid' => $h));
        
        $query2 = $this->db->get();
        foreach ($query2->result() as $row)  
            { ?>
<!-- shows all the request in tabular form -->
    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->bg; ?></td>
      <td><?php echo $row->rid; ?></td>
      <!-- can implement this approve btn in future -->
      <td><a href="#" class="btn btn-danger btn-sm">Approve</a></td>
    </tr>
            <?php } ?>