<?php
$host = 'localhost';
$dbname = 'strate11_brochure_9';
$user = 'strate11_brochur';
$pass = 'spmstrat123!';
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );



?>