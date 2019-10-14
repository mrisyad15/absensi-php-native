<!DOCTYPE html>
<html>
<head>
	<title>Download File</title>
</head>
<body>

	<table border="2px">
		<tr>
			<td><?php
	$images = glob("../guru/tables/gambar/*.*");
	   for ($i=0; $i<count($images); $i++)
	   {
	   $single_image = $images[$i];
	   ?>
	       <img src="<?php echo $single_image; ?>" width="280" height="300" />
	<?php
	 }
	?>
</td>
</tr>
	</table>

</body>
</html>
