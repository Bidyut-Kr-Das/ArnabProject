<?php
include("header.php");
if (isset($_REQUEST['mode'])) {
  $username = $_REQUEST['username'];
  $password = md5($_REQUEST['password']);
  $query = "SELECT * FROM `logindata` WHERE `username`='$username' ";
  $row = mysqli_query($connection, $query);
  if (mysqli_num_rows($row) == 0) {
    @header("location:index.php?msg=username does not exist");
  } else {
    $rowarr = mysqli_fetch_array($row);
    if ($rowarr['password'] != $password) {

      @header("location:index.php?msg=Incorrect Password!!");
    } else {
      session_start();
      $_SESSION['admin'] = $rowarr['name'];
      @header("location:dashboard.php?msg=Successfully logged in");
    }
  }
}
?>
<img src="../images/admin--bg.png" alt="" id="admin--signin--bg">
<div class="wrapper">
  <div class="sign-panels">
    <div class="login">
      <div class="title">
        <span>Sign In</span>
        <p>Welcome, please login to your account.</p>
      </div>

      <div class="or"><span>&nbsp;</span></div>

      <form method="post" action="">
        <input type="text" placeholder="Username" name="username" autocomplete="off" required title="Enter your username" />
        <input type="password" name="password" placeholder="Password" id="password--admin--signin" autocomplete="off" required title="Enter your password" />
        <input type="checkbox" id="remember" />
        <label for="remember" id="Show--Hide--pass--admin">Show Password</label>
        <input type="hidden" name="mode" value="1">
        <a href="#" class="btn-signin"><input type="submit" value="Sign In" /></a>
      </form>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>