<?php include('header.php'); ?>
<div class="container">
	<h1><?php echo $title; ?></h1>
	<div class="table-responive">
		<table>
			<thead>
				<tr>
					<th class="header">Sr.no</th>
					<th class="header">Name</th>
					<th class="header">Email id</th>
					<th class="header">Feedback</th>
				</tr>
			</thead>
			<tbody>
				<?php 
                $ctr = 0;
                foreach ($feedbackInfo as $row )
                	{ 
                		$ctr++;
			     	?>
				<tr>
					<td><?php echo $ctr; ?></td>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->email; ?></td>
          			<td><?php echo $row->feedback; ?></td>


				</tr>
				<?php 
                    }
				?>
			</tbody>
		</table>
		<div align="center">
			<form method="post" action="<?php echo base_url(); ?>index.php/export/createXLS">
				<input type="submit" name="export" class="btn btn-success" value=" Export">
			</form>
		</div>
	</div>
</div>
<?php include('footer.php'); ?> 	