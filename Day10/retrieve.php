<!DOCTYPE html>
<head></head>
<a href="insert.php">Back</a>
<a href="orderby.php">Order</a>

<body>


<?php
$conn =  new mysqli('localhost', 'root', 'comp123', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// SELECT sql query
$sql = "SELECT `id`, `name`, `pass` FROM `users`"; 

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo '<br /> id: '. $row['id']. ' - name: '. $row['name']. ' - pass: '. $row['pass'];
  }
}
else {
  echo '0 results';
}

$conn->close();
?>
</body>
</html>
