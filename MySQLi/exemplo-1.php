<?php

$conn = new mysqli("localhost", "root", " ", dbphp7);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}