<?php

$server = 'localhost';
$name = 'root';
$password = '';
$dbName = 'office';

$conn = new mysqli($server, $name, $password, $dbName);

if (isset($_POST['create'])) {
    create($conn);
}

if (isset($_POST['delete'])) {
    delete($conn);
}

if (isset($_POST['edit'])) {
    update($conn);
}

read($conn);
$conn->close();