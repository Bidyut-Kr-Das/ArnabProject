<?php
if (isset($_REQUEST["mode"])) {
    $email = $_REQUEST['email'];
    // @header("location:contactUs.php?email=" + $email);
}
?>
<footer class="footer-section">
    <div class="container">

        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50 social--footer">
                    <div class="footer-widget">
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="https://github.com/Bidyut-Kr-Das" target="_blank"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="https://github.com/Bidyut-Kr-Das" target="_blank"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="https://github.com/Bidyut-Kr-Das" target="_blank"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutUs.php">About us</a></li>
                            <li><a href="services.php">services</a></li>
                            <li><a href="contactUs.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>We promise not to spam</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="contactUs.php?email=<?php echo $email; ?>">
                                <input type="text" placeholder="Email Address" name="email">
                                <button><i class="fab fa-telegram-plane"></i></button>
                                <input type="hidden" name="mode" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div style="width:100%;" class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2023, All Right Reserved by <strong>DSS</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

</body>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include("toastButton.php");
?>

</html>