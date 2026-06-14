<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "cloud storage"
);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>