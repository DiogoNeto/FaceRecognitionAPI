<?php
// Start the session
session_start();
?>
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

	function info(){
		alert("Descrição dos critérios de avaliação da imagem.");
	}
</script>
</head>
<body>
	<?php echo ' User: '; echo $_SESSION['User'];

		echo ' Session: '; echo $_SESSION["Sessao"];

		?>
	<h3 align="center">Olhos fechados?</h3>
	
	<div align="center">
	<!--<table>
		<tr>
			<td><div id="divIniciar"><button id="btnIniciar"  class="btn btn-primary" type="submit" name="start" style="visibility: visible;">Iniciar</button></div></td>
		</tr>
	</table>-->
		

		<form action="index.php" method="POST" id="form1" name="form1" style="visibility: visible;">
			<?php require_once 'process.php'; ?>
			<table>
				<tr>
					<td><input type="text" style="visibility: hidden;" name="i" id="i" value="<?php echo $i; ?>"></td>
				</tr>
			</table>
				<table width="100px">
				<tr>
					<td style="padding: 5px">
						<button id="btnNao" class="btn btn-danger" type="submit" name="not">Não</button>
					</td>
					<td style="padding: 5px">
						<button id="btnSim" class="btn btn-success" type="submit" name="next">Sim</button>
					</td>
				</tr>
			</table>
			<table align="center" style="margin: 5px;"><tr><td><a href="#" data-toggle="tooltip" title="Caso o rosto que aparece na imagem tenha os olhos abertos na imagem, clique não. Caso o rosto que aparece na imagem tenha os olhos fechados, clique sim.">Ajuda?</a></td></tr></table>
		</form>
	</div>	
</body>
</html>