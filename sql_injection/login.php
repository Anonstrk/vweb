<?php
$conn = new mysqli('localhost', 'root', 'kali', 'ctf');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) { echo "Welcome! flag{sql_injection_success}"; } 
else { echo "Login failed."; }
?>
