<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container">
		<h1>Register Form</h1>
			<?php if($user=$this->session->flashdata('user')):   
			$user_class=$this->session->flashdata('user_class')    ?>

			  <div class="row">
			<div class="col-lg-6">
			<div class="alert <?= $user_class ?>">
			<?Php echo $user; ?>
			</dvi>
			</div>	
			</div>
			<?php  endif;  ?>
		<?php echo form_open('admin/sendmail'); ?>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="username">Username</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]); ?>
					<?php echo form_error('username'); ?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter password','name'=>'password','value'=>set_value('password')]); ?>
					<?php echo form_error('password'); ?>
				</div>
				<div class="form-group">
					<label for="firstname">First Name</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter firstname','name'=>'firstname','value'=>set_value('	')]); ?>
					<?php echo form_error('firstname'); ?>
				</div>
				<div class="form-group">
					<label for="lastname">Last Name</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter lastname','name'=>'lastname','value'=>set_value('lastname')]); ?>
					<?php echo form_error('lastname'); ?>
				</div>
				<div class="form-group">
					<label for="email">email id</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter email address','name'=>'email','value'=>set_value('email')]); ?>
					<?php echo form_error('email');  ?>
				</div>
				 <?php  echo form_submit(['type'=>'Submit','class'=>'btn btn-primary','value'=>'Submit']) ?>
				 <?php  echo form_submit(['type'=>'reset','class'=>'btn btn-dark','value'=>'Reset']) ?>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>
</body>
</html>