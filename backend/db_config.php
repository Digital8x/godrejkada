<?php
// Production Database Credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'a1679hju_Godrejkada');
define('DB_PASS', 'ArjunEswar');
define('DB_NAME', 'a1679hju_Godrejkada');

// Establish Connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SMTP Configuration
define('SMTP_HOST', 'mail.shivabihani.com');
define('SMTP_USER', 'leads@shivabihani.com');
define('SMTP_PASS', '={3)%J6b1mh7');
define('SMTP_PORT', 465);
define('SMTP_FROM_NAME', 'Godrej kada agrahara Leads');
define('ADMIN_EMAILS', 'harshmheswry@gmail.com,diyarjun9@gmail.com');
?>
