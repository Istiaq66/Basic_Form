<?php
$id = $_REQUEST['id'];
include 'Connection.php';
$delete_query = "DELETE FROM student where id='$id'";
if (mysqli_query($conn, $delete_query)) {
    echo '<script type="text/javascript">';
    echo 'alert("Data deleted....");';
    echo 'window.location.href = "Students.php";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'alert("failed... Going back to home");';
    echo 'window.location.href = "Students.php";';
    echo '</script>';
}
