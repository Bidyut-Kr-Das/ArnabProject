<?php
session_start();
if (empty($_SESSION['admin'])) {
    @header("location:index.php?msg=You need to login first");
    exit();
}
include("nav-admin.php");

?>
<h1>Work In progress....
    Please be patient : )
</h1>
<?php
include("footer.php");
?>