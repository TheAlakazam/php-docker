<?php
$conn = new mysqli("db", "root", "mypassword", "tested");
if ($conn->connect_error) {
  echo "Connection failed.";
}
echo "Connection successful";
?>
