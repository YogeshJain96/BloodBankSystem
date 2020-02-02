<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">A+ Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('Ap >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->Ap; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=A%20positive&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">A- Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('An >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->An; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=A%20negative&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">B+ Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('Bp >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->Bp; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=B%20positive&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">B- Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('Bn >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->Bn; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=B%20negative&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">AB+ Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('ABp >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->ABp; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=AB%20positive&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">AB- Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('ABn >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->ABn; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=AB%20negative&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">O+ Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('Op >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->Op; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=O%20positive&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-secondary mb-6">
  <div class="card-header bg-danger text-white">O- Blood Available</div>
  <div class="card-body">
    <p class="card-text">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Hospital</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$a=1;
      $this->db->select('*');
        $this->db->from('bloodrecords');
        $this->db->where('Onn >', 0);

        $query = $this->db->get();

        foreach ($query->result() as $row)  
            { ?>

    <tr>
      <th scope="row"><?php echo $a++; ?></th>
      <td><?php echo $row->hname; ?></td>
      <td><?php echo $row->Onn; ?></td>
      <td><a href="<?php echo base_url(); ?>index.php/reciever/bloodrequest?bg=O%20negative&hname=<?php echo $row->hname;?>&hid=<?php echo $row->hid; ?>" class="btn btn-danger btn-sm">Request Blood</a></td>
    </tr>
            <?php } ?>
    </tbody>
</table> </p>
  </div>
</div>
</div>
