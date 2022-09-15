<?php
include 'init.php';

$id = trim($_GET['id']);

$db->obrisiUsluguZaPacijenta($id);
header("Location: kartoni.php");