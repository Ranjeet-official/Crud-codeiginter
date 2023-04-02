<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Page</title>


<!-- css Link -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" >






</head>
<body>

			<?php include 'header.php'; ?>
			<div class="container" style="margin-top:50px;">
			<div class="row">
			<div class="my-2">
					<a href="adduser" class="btn btn-primary">Add Articles</a>
				</div>

			</div>


			<div class="container" style="margin-top:50px">

			<?php if($msg=$this->session->flashdata('msg')):   
			$msg_class=$this->session->flashdata('msg_class')    ?>

			  <div class="row">
			<div class="col-lg-6">
			<div class="alert <?= $msg_class ?>">
			<?= $msg; ?>
			</dvi>
			</div>
			</div>
			<?php  endif;  ?>
			</div>
			<table   id="example" class="table table-striped table-bordered text-center" style="width:100%" >
				<thead class="my-5">
				<tr>
					<th>Article Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				</thead>
				<?php if(count($articles)) { ?>
				<?php
				foreach ($articles as $art) {	
				?>
				
					<tr>
						<td><?php echo $art->article_title; ?></td>
						<td><?=  anchor("admin/edituser/{$art->id}",'Edit',['class'=>'btn btn-danger']);  ?>
							
						</td>
             
			            <td>  
						<?=
						form_open('admin/delarticles'),
					    form_hidden('id',$art->id),
						form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
						form_close();	
						?>
			            </td>  

					
					</tr>
				
			<?php }} ?>
			

			</table>
	</div>

</div>




<?php include 'footer.php'; ?>
</body>
</html>

<!-- javascrip Link -->	
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js" ></script>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>