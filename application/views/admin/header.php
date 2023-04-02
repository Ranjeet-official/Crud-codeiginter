<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Artical List</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/css/bootstrap.min.css') ?>" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php 
    if ($this->session->userdata('id'))
    { ?>

    <li><a href="<?= base_url('index.php/admin/logout'); ?>" class="btn btn-danger">Logout</a></li>
      
    <?php }?>
    </div>
  </div>
</nav>