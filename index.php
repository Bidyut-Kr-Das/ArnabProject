<?php
include("nav.php");
?>
<section id="home">
    <!-- <div class="radio--btns">
        <input type="radio" name="automatic--slide" id="radio--1">
        <input type="radio" name="automatic--slide" id="radio--2">
        <input type="radio" name="automatic--slide" id="radio--3">
        <input type="radio" name="automatic--slide" id="radio--4">
        <input type="radio" name="automatic--slide" id="radio--5">
        <input type="radio" name="automatic--slide" id="radio--6">
    </div> -->
    <div class="slider">

        <div class="video1" id="video1">
            <video autoplay="autoplay" loop="true" muted>
                <source src="images/home page slide videos/software development home page slide video.mp4" type="video/mp4">
            </video>
            <div class="textArea1">
                <div class="textArea1Body">
                    <div class="heading">Software Development</div>
                    <div class="shortDesc">Elegant custom software development for
unparalleled innovation and operational excellence.</div>
                    <div class="buttonDiv">
                        <a href="#"><input type="button" value="Know More"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="video2" id="video2">
            <video autoplay="autoplay" loop="true" muted>
                <source src="images/home page slide videos/software testing home page slide video2.mp4" type="video/mp4">
            </video>

        </div>
        <div class="video3" id="video3">
            <video autoplay="autoplay" loop="true" muted>
                <source src="images/home page slide videos/digital marketing home page slide video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="video4" id="video4">
            <video autoplay="autoplay" loop="true" muted>
                <source src="images/home page slide videos/mock test home page slide video use first 10 secs.mp4" type="video/mp4">
            </video>
        </div>
        <div class="video5" id="video5">
            <video autoplay="autoplay" loop="true" muted>
                <source src="images/home page slide videos/industrial training home page slide 2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="video6" id="video6">
            <video autoplay="autoplay" loop="true" muted>
                <source src="images/home page slide videos/placement and internship home page slide video.mp4" type="video/mp4">
            </video>
        </div>

    </div>
    <div class="arrowbuttons">
        <i class="fa-solid fa-angles-left" id="leftButton"></i>
        <i class="fa-solid fa-angles-right" id="rightButton"></i>
    </div>
    <!-- <div class="label">
        <label for="radio--1" id="radio__btn__1"></label>
        <label for="radio--2"></label>
        <label for="radio--3"></label>
        <label for="radio--4"></label>
        <label for="radio--5"></label>
        <label for="radio--6"></label>
    </div> -->
</section>

<?php
include("footer.php");
?>