<?php
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'PETTERR';
$password = '26092007';
$bdd = 'biblio';

try {
$monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
$monPdo->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo $e->getMessage();
$monPdo = null;

}
?>