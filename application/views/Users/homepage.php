<?php include('header.php'); ?>
<body>
	<div class="container">
			<table   id="example" class="table table-striped table-bordered text-center" style="width:100%" >
				<thead class="my-5">
				<tr>
					
					<th>Article Title</th>
					<th>Date</th>
				</tr>
				</thead>
				<?php if(count($articles)) { ?>
				<?php
				foreach ($articles as $art) {	
				?>
				
					<tr>
						<td><?php echo $art->article_title; ?></td>
					
					</tr>
				
			<?php }} ?>
			

			</table>
		</div>
		</div>
		</div>

	</body>
	

<?php include('footer.php'); ?> 
