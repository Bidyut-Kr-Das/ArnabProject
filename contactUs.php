<?php
include("nav.php");
?>
<div class="bg--svg">
    <svg id="visual" viewBox="0 0 960 540" width="960" height="540" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <path d="M0 308L17.8 313.2C35.7 318.3 71.3 328.7 106.8 301.7C142.3 274.7 177.7 210.3 213.2 210C248.7 209.7 284.3 273.3 320 284.3C355.7 295.3 391.3 253.7 426.8 240.3C462.3 227 497.7 242 533.2 247.5C568.7 253 604.3 249 640 248.2C675.7 247.3 711.3 249.7 746.8 264C782.3 278.3 817.7 304.7 853.2 304.7C888.7 304.7 924.3 278.3 942.2 265.2L960 252L960 0L942.2 0C924.3 0 888.7 0 853.2 0C817.7 0 782.3 0 746.8 0C711.3 0 675.7 0 640 0C604.3 0 568.7 0 533.2 0C497.7 0 462.3 0 426.8 0C391.3 0 355.7 0 320 0C284.3 0 248.7 0 213.2 0C177.7 0 142.3 0 106.8 0C71.3 0 35.7 0 17.8 0L0 0Z" fill="#523ca2" stroke-linecap="round" stroke-linejoin="miter"></path>
    </svg>
</div>

<section class="Contact_us" style="position:relative;">
    <div class="service--body note">

        <h3 class="services--tittle">CONTACT US</h3>
        <h5 class="services--desc">Contact For Any Query</h5>
    </div>
    <div class="container-xxl py-5">
        <!-- <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-C" ><span></span></p>
                    <h1 class="text-center mb-5">Contact For Any Query</h1>
                </div> -->
        <div class="row justify-content-center container--contact--form">
            <div class="col-lg-7 subcontainer">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3 flex meow">
                            <div class="col-md-6 meow2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required autocomplete="off">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 meow2">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required autocomplete="off">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required autocomplete="off">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px;padding-top:5rem;font-size:2rem;"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 submit--contact--form" type="submit" style="background-color:#523ca2;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
include("footer.php");
?>