
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<title></title>
</head>
<body>
	<div class="footer">
		<?php
		$query=mysqli_query($con,"select postimage from tblad where tblad.is_active = 1  ");

		if ($query === FALSE) {
			die(mysqli_error($con));
		}

while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
 <img class="card-img-top" src="images/<?php echo htmlentities($row['postimage']);?>" ></div>
		
	</div>
	<?php } ?>
</body>
</html>