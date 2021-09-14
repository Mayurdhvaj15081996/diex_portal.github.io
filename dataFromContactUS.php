<!DOCTYPE html>
<html>
<head>
	<title>Support</title>
	<link href = "style.css" rel="stylesheet">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript" src="welcome.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	<br>
	<br>
	<h2> Support </h2>
	<br>
	<?php
		$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

		$queryForGetttigDataFromContactUS = mysqli_query($connection, "SELECT * FROM contact_us");

		while($dataofQuery = mysqli_fetch_array($queryForGetttigDataFromContactUS)){
		?>
		<table class="table table-striped">
			<tr scope="row" >
				<th scope="col">
					#
				</th>
				<th scope="col">
					Username
				</th>
				<th scope="col">
					Email
				</th>
				<th scope="col">
					Message
				</th>
			</tr>
			<tr scope="row" class="table-primary">
				<td class="table-primary">
					<?php echo $dataofQuery['id']; ?>
				</td>
				<td class="table-primary">
					<?php echo $dataofQuery['username']; ?>
				</td>
				<td class="table-primary">
					<?php echo $dataofQuery['email']; ?>
				</td>
				<td class="table-primary">
					<?php echo $dataofQuery['message']; ?>
				</td>
			</tr>
		</table>
		<?php		
		}
	?>
</body>
</html>