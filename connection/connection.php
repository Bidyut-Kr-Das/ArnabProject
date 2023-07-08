<?php
$connect = mysqli_connect("root", "", "", "");
if (mysqli_connect_error()) {
    echo "error" + mysqli_connect_errno();
}
?>
