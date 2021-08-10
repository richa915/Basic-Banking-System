<?php
    include "navigation.php";
?>

<!--------------------CAROUSEL START--------------------------------->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  
  <div class="carousel-item active">
    <img src="Images/carousel1.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="Images/carousel2.jpg" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="Images/carousel3.jpg" class="d-block w-100" alt="...">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div>
<!--------------------CAROUSEL END--------------------------------->
<div class="container">

    <div class="row">
        <div class="col-md-6 d-flex justify-content-center home-img">
            <img src="Images/onlineb.jpg" class="feature-img">
        </div>
        <div class="col-md-6 d-flex justify-content-center ">
            <p class="d-flex align-items-center feature-text">Make over 200 transactions through Net Banking</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
            <img src="Images/upi.jpg" class="feature-img">
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <p class="d-flex align-items-center feature-text">Instant and Easy Payments through Mobile</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
            <img src="Images/cardless.jpg" class="feature-img">
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <p class="d-flex align-items-center feature-text">Seamless Transaction within seconds</p>
        </div>
    </div>

</div>

<?php
  include "footer.php";
?>