<?php
include("inc/connect_db.php");

$sql = "SELECT $id, $field1, $field2, $field3 FROM $table ORDER BY id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='card'>id: " . $row[$id]. "<br>Title: " . $row [$field1] . "<br>Comment: " . $row[$field2] . "<br>Signature: " . $row[$field3] . "<div class='del'><a href='inc/delete_blow.php?id=" . $row[$id] . "'>DELETE</a></div></div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>