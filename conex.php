<?php
$Userver = "localhost";
$Uuser = "root";
$Upass = "";
$Udb = "visitas";

$con = new mysqli($Userver,$Uuser,$Upass,$Udb);

if ($con->connect_errno) {
    echo "Error";
}
?>