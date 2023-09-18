<?php

use Config\Database;

require_once __DIR__ . "/../Config/Database.php";

$db = Database::getConnection();
echo "Sukses membuat koneksi database." . PHP_EOL;