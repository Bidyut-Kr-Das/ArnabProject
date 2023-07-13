<?php
$toast = false;
$message = "";
if (isset($_REQUEST['msg'])) {
    $toast = true;
    $message = $_REQUEST['msg'];
}
?>
<div id="snackbar"><?php echo $message; ?></div>
<?php
if ($toast) {
    echo "<script>
    myFunction()
    </script>";
}
?>