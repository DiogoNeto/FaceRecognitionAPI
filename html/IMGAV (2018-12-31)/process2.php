<?php 

$mysqli = new mysqli('localhost','root','3492017652!','fotos') or die(mysqli_error($mysqli));
if(isset($_POST['next'])){
	$i =$_POST['i'];
	
		$mysqli->query("UPDATE imagens SET EyeCenterLocationAccuracy = EyeCenterLocationAccuracy + 1, Interactions=Interactions+1 WHERE id='$i'") or die($mysqli->error());

		$f->query("SELECT Path FROM imagens WHERE id='$i'") or die($mysqli->error());
		
	$i++;
	echo '$i';

	$dir ="images/";
		if ($opendir = opendir($dir)){
			while(($file=readdir($opendir))!==false)
			{ 
				if($file!="." && $file!=".." && $file=="$i.jpg"){
					echo "<img src='$dir/$file'>";
				}
			}
		}

}

if(isset($_POST['not'])){
	$i =$_POST['i'];
	

		$mysqli->query("UPDATE imagens SET Interactions = Interactions + 1 WHERE id='$i'") or die($mysqli->error());
	
	$i++;
	$dir ="images/";
		if ($opendir = opendir($dir)){
			while(($file=readdir($opendir))!==false)
			{ 
				if($file!="." && $file!=".." && $file=="$i.jpg"){
					echo "<img src='$dir/$file'>";
				}
			}
		}
}
