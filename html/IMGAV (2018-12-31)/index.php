<!Doctype html>
<html>
<head>
<title>Photos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  
</style>
<script type="text/javascript">

	function next(){
		document.getElementById('div1').style.visibility="hidden";
		document.getElementById('form1').style.visibility="visible";
	}

	//function not(){
	//	document.getElementById('div1').style.visibility="hidden";
	//	document.getElementById('form1').style.visibility="visible";
	//}

</script>
</head>
<body>
	<h3 align="center">Fotos ISCTE-IUL</h3>
	<div id="div1" align="center" style="visibility: visible; padding: 5px;">
		<button type="button" class="btn btn-primary" id="btn1" onclick="next()">Ver próxima imagem</button>
	</div>

	<div align="center">
	<form action="index.php" method="POST" id="form1" style="visibility: hidden;">
	<?php require_once 'process.php'; ?>
	<table>
	<tr>
	<td><p>Olhos centrados na imagem?</p></td>
	</tr>
	<tr>
		<td>
			<input type="text" style="visibility: hidden;" name="i" id="i" value="<?php echo $i; ?>">
		</td>
	</tr>
	</tr>
		<tr>
		<td>
			<button class="btn btn-danger" type="submit" name="not">Não</button>
		</td>
		<td>
			<button class="btn btn-primary" type="submit" name="next">Sim</button>
		</td>
		</tr>
	</table>
	</form>
	</div>
</body>
</html>