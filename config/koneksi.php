<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "spkpedia";

$koneksi = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

if (!$koneksi) {
    echo "Ada Error Kawan";
    exit();
}

mysqli_set_charset($koneksi, "utf8");
