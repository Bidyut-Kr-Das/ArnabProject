<?php
include("nav.php");


?>
<div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="textArea1">
            <div class="heading">Software Development</div>
            <div class="shortDesc"></div>
            <div class="button--knowmore">
              <a href="#"><input type="button" value="Know More" /></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="textArea1">
            <div class="heading">Software Testing</div>
            <div class="shortDesc"></div>
            <div class="button--knowmore">
              <a href="#"><input type="button" value="Know More" /></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="textArea1">
            <div class="heading">Digital Marketing</div>
            <div class="shortDesc"></div>
            <div class="button--knowmore">
              <a href="#"><input type="button" value="Know More" /></a>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
<?php
include("footer.php");

?>