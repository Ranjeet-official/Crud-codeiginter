<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/bootstrap.min.css'); ?>" >
</head>
<body>
	<div class="container">
		<div class="table">
				<table border="1" cellspacing="1" cellpadding="20">
					<tr>
						<th>IP_Address</th>
						<th><?php echo $ip_address; ?></th>
					</tr>
					<tr>
						<th>Version</th>
						<th><?php echo $os; ?></th>
					</tr>
					<tr>
						<th>Platform</th>
						<th><?php echo $browser; ?></th>
					</tr>
					<tr>
						<th>Browser</th>
						<th><?php echo $browser_version; ?></th>
					</tr>
					<tr>
						<th>Accept_lang</th>
						<th><?php echo $en; ?></th>
					</tr>
				</table>
		</div>
	</div>

</body>
</html>