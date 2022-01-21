<?php 

$mysqli = new mysqli('localhost','root','3492017652!','fotos') or die(mysqli_error($mysqli));

$count = 0;


if(isset($_POST['next'])){
	$i =$_POST['i'];

	$i++;
	//echo $i;

		$mysqli->query("UPDATE imagens SET EyeCenterLocationAccuracy = EyeCenterLocationAccuracy + 1, Interactions=Interactions+1 WHERE id='$i'") or die($mysqli->error());


		$sql = "SELECT Path FROM imagens where id=$i";

		if($res = $mysqli->query($sql)){
			$data = mysqli_query($mysqli, $sql);
			$row = mysqli_fetch_assoc($data);
			$path = $row['Path'];
		}


		//$sql = "SELECT Count(*) FROM imagens";


		//$result = $mysqli->query("SELECT * FROM imagens WHERE id=$id") or die($mysqli->error());
		//mysql_select_db('fotos');
		//mysql_query(query)

		
		//$path = ($mysqli->query("SELECT Path FROM imagens WHERE id=$i")or die($mysqli->error()));
		
		//$count = ($mysqli->query("SELECT count(*) FROM imagens") or die($mysqli->error()));
		
		//echo $path;

		//echo $count;
		
	
	$dir ="images/";
		if ($opendir = opendir($dir)){
			if(($file=readdir($opendir))!==false)
			{ 
				if($dir+$file=="$path"){
					//echo "<img src='$dir/$file'>";
					echo "<img src='$path'>";
				}
			}
		}
	if($path==""){
		header("Location: ../IMGAV/index.html");
		exit;
	}
}

if(isset($_POST['not'])){
	$i =$_POST['i'];
		echo $msg;
		$mysqli->query("UPDATE imagens SET Interactions = Interactions + 1 WHERE id='$i'") or die($mysqli->error());
	
	$i++;
	$dir ="images/";


	$sql = "SELECT Path FROM imagens where id=$i";

		if($res = $mysqli->query($sql)){
			$data = mysqli_query($mysqli, $sql);
			$row = mysqli_fetch_assoc($data);
			$path = $row['Path'];
		}


		if ($opendir = opendir($dir)){
			if(($file=readdir($opendir))!==false)
			{ 
				if($dir+$file=="$path"){
					echo "<img src='$path'>";
				}
			}
		}

	if($path==""){
		header("Location: ../IMGAV/index.html");
	}
}


if(isset($_POST['start'])){
	$i =$_POST['i'];
		echo $msg;
		$mysqli->query("UPDATE imagens SET Interactions = Interactions + 1 WHERE id='$i'") or die($mysqli->error());
	
	$i++;
	$dir ="images/";


	$sql = "SELECT Path FROM imagens where id=$i";

		if($res = $mysqli->query($sql)){
			$data = mysqli_query($mysqli, $sql);
			$row = mysqli_fetch_assoc($data);
			$path = $row['Path'];
		}


		if ($opendir = opendir($dir)){
			if(($file=readdir($opendir))!==false)
			{ 
				if($dir+$file=="$path"){
					echo "<img src='$path'>";
				}
			}
		}

	if($path==""){
		header("Location: ../IMGAV/index.html");
	}
}

if(isset($_POST['login'])){
	$User=$_POST['User'];
	$Password=$_POST['Password'];

	$result=0;
	//$sql = "SELECT COUNT(*) FROM `login` WHERE user='$User' and password=md5('$Password')";
	//$result = $mysqli->query("SELECT count(*) FROM `login` WHERE user='$User' and password=md5('$Password')") or die($mysqli->error());

	//echo "$User";
	//echo "$Password";
	//$Pass="pass";
	//$Passs= echo md5($Pass);
	//echo $Pass;
	//$Passs = echo md5($Pass);
	//echo $Passs;

	$sql = "SELECT id FROM login WHERE user='$User' and password='$Password'";

	if($res = $mysqli->query($sql)){
			$data = mysqli_query($mysqli, $sql);
			$row = mysqli_fetch_assoc($data);
			$idd = $row['id'];
		}

	//$_SESSION['result'] = $result;

	if($idd == 1){
		//$_SESSION['result'] = $result;
		header("Location: ../IMGAV/index.html");
	}
	else{
		echo "Utilizador ou palavra passe errada.";
	}
}


//Login
//Instruções
//Tirar botão de proxima imagem
//DB
//id user foto criterio score data
//ver o data sets que o jose menciona na tese e outros data sets como faces in the wild
//ver as caracteristicas que estao contempladas no iso e comparar com as que estao na tese do jose
//verificar intrução em html para as imagens n ficarem em cache
