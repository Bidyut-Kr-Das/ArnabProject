<?php
include("nav.php");
$rikuExistkore = false;
$rikuExistkorena = false;

if (isset($_REQUEST['riku'])) {
    $rikuExistkore = true;
    $kingshuk = $_REQUEST['riku'];
    $query = "SELECT * FROM `servicescard` WHERE `id`='$kingshuk' ";
    $row = mysqli_query($connection, $query);
    $rowarr = mysqli_fetch_array($row);
} else {
    $rikuExistkorena = true;
    $query = "SELECT * FROM `servicescard`";
    $is_query_run = mysqli_query($connection, $query);
}





?>
<div class="bg--svg" style="overflow-x:hidden;">
    <svg id="visual" viewBox="0 0 960 540" width="960" height="540" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <path d="M0 308L17.8 313.2C35.7 318.3 71.3 328.7 106.8 301.7C142.3 274.7 177.7 210.3 213.2 210C248.7 209.7 284.3 273.3 320 284.3C355.7 295.3 391.3 253.7 426.8 240.3C462.3 227 497.7 242 533.2 247.5C568.7 253 604.3 249 640 248.2C675.7 247.3 711.3 249.7 746.8 264C782.3 278.3 817.7 304.7 853.2 304.7C888.7 304.7 924.3 278.3 942.2 265.2L960 252L960 0L942.2 0C924.3 0 888.7 0 853.2 0C817.7 0 782.3 0 746.8 0C711.3 0 675.7 0 640 0C604.3 0 568.7 0 533.2 0C497.7 0 462.3 0 426.8 0C391.3 0 355.7 0 320 0C284.3 0 248.7 0 213.2 0C177.7 0 142.3 0 106.8 0C71.3 0 35.7 0 17.8 0L0 0Z" fill="#523ca2" stroke-linecap="round" stroke-linejoin="miter"></path>
    </svg>
</div>
<div class="service--body" style="overflow-x:hidden;">
    <h3 class="services--tittle"><?php
                                    if ($rikuExistkore) {
                                        echo $rowarr['title'];
                                    } else {
                                        echo "Our Features and Services";
                                    }

                                    ?></h3>
    <h5 class="services--desc"><?php
                                if ($rikuExistkore) {
                                    echo $rowarr['description'];
                                } else {
                                    echo "Passionate experts in software development, testing, digital marketing, and training. We offer tailored solutions, robust applications, flawless testing, result-driven marketing, and comprehensive mock tests. Our industry-specific training empowers IT professionals. We provide placement and internship assistance, bridging the education-employment gap for computer and non-IT students. Experience excellence with our expertise. Services we offer";
                                }
                                ?></h5>
    <div class="card--services--body">
        <?php
        if ($rikuExistkorena) {
            while ($query_executed = mysqli_fetch_array($is_query_run)) {
                // echo $query_executed['photo'].' ';
                // echo $query_executed['description'].'<br>';

        ?>
                <a href="service_admin.php?riku=<?php echo $query_executed['id'];
                                                ?>">
                    <div class="card--services">
                        <div class="card mb-3" style="overflow:hidden;">
                            <div class="row no-gutters idkHyperClassMayBe" style="overflow:hidden;">
                                <div class="col-md-4 gif--image">
                                    <img src="images/card gifs/software development card.gif" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="overflow:hidden;"><?php echo $query_executed['title']; ?></h5>
                                        <div class="twist--box"></div>
                                        <p class="card-text"><?php echo $query_executed['ShortDesc']; ?></p>
                                        <p class="card-text"><small class="text-muted">Click to Learn More</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
        <?php
            }
        }
        ?>
    </div>