<?php
$conn = mysqli_connect("","root", "hallo");


if ($result = $conn -> query("SELECT * FROM users")) {
  while ($row = $result -> fetch_assoc()) {
    echo "Jumlah user: " (value(id));
  }
}

$conn -> close();
?> 
