<?php 
include("header.php");

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

          <form action="">
            <input type="text" placeholder="Username" />
            <input type="password" placeholder="Password" id="password--admin--signin"/>
            <input type="checkbox" id="remember" />
            <label for="remember" id="Show--Hide--pass--admin">Show Password</label>
            <input type="hidden" name="mode" value="1">
            <a href="#" class="btn-signin"
              ><input type="submit" value="Sign In"
            /></a>
          </form>
        </div>
      </div>
    </div>
    <?php 
    include("footer.php");
    ?>
 
