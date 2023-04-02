<?php include 'header.php'; ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-6">
	<h1>Admin Form</h1>
      <?php

    if($error=$this->session->flashdata('Login_failed'))     :?>

    <div class="row">
    <div class="col-lg-12">
    <div class="alert alert-danger">
    <?php echo $error; ?>

    </div>
    </div>
    </div>
    <?php  endif;  ?>
<?php echo form_open('login/index'); ?>
  <div class="form-group">
    <label for="Username">Username</label>
    <input type="text" class="form-control" id="Username" aria-describedby="textHelp" placeholder="Enter Username" name="username" value="<?php echo set_value('username'); ?>">
    <small id="emailHelp" class="form-text text-danger"> <?php echo form_error('username'); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="pass" value="<?php echo set_value('password'); ?>">
   <small id="password" class="form-password text-danger"> <?php echo form_error('pass'); ?></small>
  </div>
  <br>  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-success">Reset</button>
  <?php echo anchor('admin/register/','Sign up?','class="link-class"') ?>
</div>
</div>
</div>

<?php include 'footer.php'; ?>
