<?php
include '../Database/connect.php';

$id = $_GET['file_id'];
$stmt = $con->prepare("DELETE FROM `tbl_slider` WHERE id = ?");
$stmt->bind_param("i", $id);
$result = $stmt->execute();
if ($result) {
    echo "<script> alert('Delete successfully')</script>";
} else {
    echo "<script> alert('Delete failed')</script>";
    header("Location: index.php");
}

?>