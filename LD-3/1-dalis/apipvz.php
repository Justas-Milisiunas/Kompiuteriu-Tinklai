<?php
// apipvz.php: paima iš lenteles "zinutes" paskutinius n ('kiek') į nurodytą miestą ('kur') įrašus 
// Jei kur nenurodyta =visi miestai, jei kiek nenurodyta=visi įrašai
//
header("Content-Type: application/json; charset=UTF-8");

//$miestas="Ryga";$kiek="3";// autonominiam testavimui
$miestas=$_GET['kur']; 
$kiek=$_GET['kiek'];
//error_log ("Kreipinys: ".$miestas." ".$kiek); //derinimui jei negaunam atsakymo: kokios atėjo užklausos reikšmės?

$server = "localhost";
$user = "stud";
$password = "stud";
$db= "pvz";
		$dbc=new mysqli($server,$user,$password,$db);
		if($dbc->connect_error){
			die ("Negaliu prisijungti prie MySQL:"	.$dbc->connect_error);}
$sql = ("SET CHARACTER SET utf8"); $dbc->query($sql);      // del lietuviškų raidžių

// suformuojam sql užklausą pagal parametrus $miestas ir paskutinius $kiek
if (!empty($kiek))$sql="SELECT * FROM ( ";
else $sql="";
$sql= $sql."SELECT * FROM keliones ";
if (!empty($miestas))$sql=$sql." WHERE kur='".$miestas."'";
if (!empty($kiek))$sql=$sql." ORDER BY id DESC LIMIT ".$kiek.") sub ORDER BY id DESC";
// echo $sql; die;     //autonominiam testavimui kaip atrodo sql užklausa
$result =  $dbc->query($sql);
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);

?>