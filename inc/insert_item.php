<?php
include("connect_db.php");

$new_field1=($_POST["field1"]);
$new_field2=($_POST["field2"]);
$new_field3=($_POST["field3"]);

$sql = "INSERT INTO $table ($field1, $field2, $field3) VALUES ('$new_field1', '$new_field2', '$new_field3')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");
exit();
?>