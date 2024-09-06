<?php
//Location: config/db.php

require_once '../classes/Database.php';

$database = new Database();
$db = $database->getConnection();
?>
