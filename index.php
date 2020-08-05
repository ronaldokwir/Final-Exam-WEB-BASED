<?php
include 'top.php';


$server = "localhost";
$dbUsername ="root";
$dbpasswd = "";
$dataBase = "umu";
$conn = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);
if (!$conn) {
die("connection to database failed!");

} 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="slider.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
font-awesome/4.7.0/css/font-awesome.main.css">
	<title>www.umu.ac.ug-</title>
</head>
<body>
<div class="cimmu">

</div>
<div class="botom">
    <div class="palm">
        <h2>News and Information</h2>
    </div>
    <div class="palm">
        <h2>Silver Jubilee Celebration</h2>
    </div>
</div>


</body>
</style>
</html>