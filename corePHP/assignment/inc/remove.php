<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	require("connect.php");
	$sql = "DELETE FROM biciclete WHERE id = {$id}";
	mysqli_query($conn, $sql);
	header("Location: ../result.php");
}
