<?php
include "function.php";
horario();
$data = date('d/m/y');
echo ", hoje é ".$data;
echo " (";
diaSemana();
echo "-feira).<br>";
 ?>
