<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monika-Hotal!_Home</title>
    <?php require('include/links.php');?>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>



</head>
  <!-- <body class="bg-light"> -->

  <?php require('include/header.php'); ?>
   
 <!-- Carousel -->

<div class="container-fluid px-lg-4 mt-4">
 
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/img1.jpg" class="w-100 h-auto d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/img2.jpg" class="w-100 h-auto d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/img3.jpg" class="w-100 h-auto d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/img4.jpg" class="w-100 h-auto d-block">
      </div>

      <div class="swiper-slide">
        <img src="images/carousel/img5.jpg" class="w-100 h-auto d-block">
      </div>

      <div class="swiper-slide">
        <img src="images/carousel/img6.jpg" class="w-100 h-auto d-block">
      </div>

    </div>
    </div>
</div>

<!-- Check availability form -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow-lg p-5 rounded-lg"> 
      <h5>Check Booking Availability</h5><br>
      <form>

      <div class="row">
        <div class="col-lg-3 mb-3">
        <label class="form-label" style="font-weight: 500;">Check-in</label>
      <input type="date" class="form-control shadow-none"> </div>

<div class="col-lg-3 mb-3">
        <label class="form-label" style="font-weight: 500;">Check-out</label>
      <input type="date" class="form-control shadow-none">
</div>

<div class="col-lg-3 mb-3">
        <label class="form-label" style="font-weight: 500;">Adult</label>
        <select class="form-select shadow-none">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
      
</div>

<div class="col-lg-3 mb-3">
        <label class="form-label" style="font-weight: 500;">Childreen</label>
        <select class="form-select shadow-none">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
      </div>
      <div class="col-lg-1 mb-lg-3 mt-2">
        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
    </div>

      </div>
</form>
    </div>
  </div>
</div>


<!--OUR ROOMS-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS </h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/Room1.jpg" class="card-img-top">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="guests mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>


<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i></span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

</div>    
</div>
</div></div>


<!-- <div class="row"> -->
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/R11.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>


<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>


<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>

<!-- <div class="container">
  <div class="row"> -->
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/Room4.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i></span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

</div>    
</div>
</div></div>


<!-- <div class="container">
  <div class="row"> -->
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/Room3.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded-pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i></span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

</div>    
</div>
</div></div>

<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/R11.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>



<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/R11.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star- text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>



<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/R14.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>




<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/Room5.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>




<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/R14.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>




<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/R13.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>

<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>




<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img src="Images/rooms/R12.jpg" class="card-img-top" alt="Room1">

  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">₹200 Per Night</h6>

    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>


      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Bathrooms
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Swimming Pool
      </span></div>

<div class="facilities mb-4">
<h6 class="mb-1">Facilities</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        wifi
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Television
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        AC
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Room Heater
      </span>
</div>


</php


<div class="facilities mb-4">
<h6 class="mb-1">Guests</h6>

<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>

      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        4 Childreen
</span>
</div>

<div class="rating mb-4">
  <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i>
</span>
  </div>

<div class="d-flex justify-content-evenly mb-2">
  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
  </div>    
</div>
</div></div>




<div class="col-lg-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Details >>></a>


  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Facilities </h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
     
    <svg  xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
  <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
  <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>

</svg>
<h5>wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
     
     <svg  xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
   <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
   <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
 
 </svg>
 <h5>wifi</h5></div>

 <div class="col-lg-2 col-md-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
     
     <svg  xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
   <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
   <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
 
 </svg>
 <h5>wifi</h5></div>

</div>

<div class="col-lg-12 text-center mt-5">
<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Facilities>>>></a>
<!-- Testimoninials --->

</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
</div>

<div class="container mt-5">

<!-- Swiper -->

<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white rounded shadow py-4 p-4">
        <div class="Profile d-flex align-items-center   mb-3">

         <img src="images/features/istockphoto-1364061592-612x612.jpg" width="30px"/>
        <h6 class="m-0 ms-2">Random user1</h6>
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Autem incidunt tenetur odio maxime ipsa minima cupiditate
          neque nesciunt eos alias fugit vitae minus aliquam,
         quisquam nostrum? Repudiandae culpa quidem perferendis.</p>

         <h6 class="mb-1">Rating</h6>
  <span class="badge rounded -pill bg-dark">
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-fill text-warning"></i>
  <i class="bi bi-star-half text-warning"></i>
</div>  
      <div class="swiper-slide bg-white rounded shadow py-4 p-4">
      <div class="Profile d-flex align-items-center mb-3">

<img src="images/features/istockphoto-1364061592-612x612.jpg" width="30px"/>
<h6 class="m-0 ms-2">Random user1</h6>
</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Autem incidunt tenetur odio maxime ipsa minima cupiditate
 neque nesciunt eos alias fugit vitae minus aliquam,
quisquam nostrum? Repudiandae culpa quidem perferendis.</p>

<h6 class="mb-1">Rating</h6>
<span class="badge rounded -pill bg-dark">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i>
 </div>

 <div class="swiper-slide bg-white rounded shadow py-4 p-4">
      <div class="Profile d-flex align-items-center mb-3">

<img src="images/features/istockphoto-1364061592-612x612.jpg" width="30px"/>
<h6 class="m-0 ms-2">Random user1</h6>
</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.
Autem incidunt tenetur odio maxime ipsa minima cupiditate
 neque nesciunt eos alias fugit vitae minus aliquam,
quisquam nostrum? Repudiandae culpa quidem perferendis.</p>

<h6 class="mb-1">Rating</h6>
<span class="badge rounded -pill bg-dark">
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-fill text-warning"></i>
<i class="bi bi-star-half text-warning"></i><br>

 </div>
 

 <div class="swiper-pagination"></div></div>

 <div class="col-lg-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>>>></a></div>
  </div>  

 


<!---- REACH US --->

 <!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2> -->

 </div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
</div>

<div class="container">

 
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">

    <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27812.676714469795!2d79.45527075!3d29.3824502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a0a1bc28fd9d61%3A0x7cae7ba916987db3!2sNainital%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1693157226373!5m2!1sen!2sin"
       height="320px" allowfullscreen="" loading="lazy"
       referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

    <div class="col-lg-4 col-md-4">
    <div class="bg-white rounded shadow py-4 mb-4 center-text">

      <h5>Call Us </h5>
      <a href="tel: +91 8080939813" class="d-inline-block ta-center mb-2 text-decoration-none text-blue">
      <i class="bi bi-telephone-forward-fill"></i>+91 8080939813</a><br><br>

      <a href="tel: +91 8080939813" class="d-inline-block mb-2 text-decoration-none text-blue">
      <i class="bi bi-telephone-forward-fill"></i>+91 8080939813</a></div> <br><br>


      <div class="bg-white rounded shadow py-4 center-text">
      <h5>Follow Us </h5>
      <a href="#" class="d-inline-block mb-3 center-text">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter me-1"></i> Twitter </span></a><br>
        
      
      <a href="#" class="d-inline-block mb-3 center-text">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook me-1"></i> FaceBook </span></a><br>
        
      
      
       
      <a href="#" class="d-inline-block mb-3 center-text">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1"></i>Instagram</span></a>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


    
          





<?php require('include/footer.php');?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
     spaceBetween: 30,
      effect: "fade", 
      loop:true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },

      pagination: {
        el: ".swiper-pagination",
      },

      breakpoints:{
        320:{
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },

        768: {
          slidesPerView: 2,
        },
            
        1024: {
          slidesPerView: 3,
        },
           
          }
    
      });
      
  
  </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
