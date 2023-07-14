<?php
include("nav.php");


?>
<style>
    * {
        overflow-x: hidden;
    }
</style>
<div class="main">


    <div id="carouselExample" style="position:absolute;" class="carousel slide" data-ride="carousel" data-interval="1" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" id="slide0">
                <div class="textArea1">
                    <div class="heading4">Software Development</div>
                    <div class="shortDesc">Elegant custom software development for
                        unparalleled innovation and operational excellence.</div>
                    <div class="button--knowmore">
                        <a href="serviceSoftwareDev.php"><input type="button" value="Know More" /></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="slide1">
                <div class="textArea1">
                    <div class="heading">Software Testing</div>
                    <div class="shortDesc">Unsurpassed software testing for perfection and
                        user-centric excellence.</div>
                    <div class="button--knowmore">
                        <a href="serviceSoftwareTest.php"><input type="button" value="Know More" /></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="slide2">
                <div class="textArea1">
                    <div class="heading">Digital Marketing</div>
                    <div class="shortDesc">Unrivalled digital marketing for unparalleled brand
                        visibility and exceptional lead generation.</div>
                    <div class="button--knowmore">
                        <a href="serviceDigitalMarketting.php"><input type="button" value="Know More" /></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="slide3">
                <div class="textArea1">
                    <div class="heading4">Mock Tests for Class 9 to 12</div>
                    <div class="shortDesc">Revolutionary mock tests for unparalleled exam
                        preparation and academic excellence.</div>
                    <div class="button--knowmore">
                        <a href="serviceMockTest.php"><input type="button" value="Know More" /></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="slide4">
                <div class="textArea1">
                    <div class="heading"> Industrial Training</div>
                    <div class="shortDesc">Empowering IT professionals with cutting-edge
                        industrial training programs.</div>
                    <div class="button--knowmore">
                        <a href="serviceIndustrialTrainning.php"><input type="button" value="Know More" /></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="slide5">
                <div class="textArea1">
                    <div class="heading4">Placement & Internship Assistant</div>
                    <div class="shortDesc">Empowering carrer with personalised placement and internship assistant.</div>
                    <div class="button--knowmore">
                        <a href="servicePlacement.php"><input type="button" value="Know More" /></a>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="circle1"></div>

</div>
<?php
include("footer.php");

?>