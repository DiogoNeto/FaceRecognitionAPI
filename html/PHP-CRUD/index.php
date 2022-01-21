<html>
	<head>
		<title>PHP CRUD</title>
	</head>
	<body>
	<?php require_once 'process.php'; ?>
	<?php 
		$mysqli = new mysqli('localhost','root','3492017652!','crud') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
		?>
		<div style="padding: 5px;">
		<table style="border:solid 1px black;">
			<tr style="border:solid 1px black;">
				<th>Name</th>
				<th>Location</th>
				<th colspan="2">Action</th>
			</tr>
			<?php
				while ($row = $result->fetch_assoc()): ?>
					<tr style="border:solid 1px black;">
						<td style="border:solid 1px black;"><?php echo $row['name']; ?></td>
						<td style="border:solid 1px black;"><?php echo $row['location']; ?></td>
						<td style="border:solid 1px black;">
							<a href="index.php?edit=<?php echo $row['id'];?>">Edit</a>
							<a href="index.php?delete=<?php echo $row['id'];?>">Delete</a>
						</td>
					</tr>
			<?php endwhile; ?>
			</table>
		</div>
	<form action="index.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter your name">
		<label>Location</label>
		<input type="type2" name="location" value="<?php echo $location; ?>" placeholder="Enter your location">
		<?php if($update == true): ?>
				<button type="submit" name="update">Update</button>
			<?php else: ?>
			<button type="submit" name="save">Save</button>
		<?php endif; ?>
	</form>
	</body>
</html>