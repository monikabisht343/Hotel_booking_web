<!doctype html>
<html lang="en">
<style>
  /* .pop:hover{
    border-top-color: var(--teal) !important ;

  } */
</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monika-Hotal!_facilities</title>
  <link rel="stylesheet" href="common.css">
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/> -->

  <?php require('include/links.php');?>




  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">Hotal Taj</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="Rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilities</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contact Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>



        </ul>
        <div class="d-flex">

          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#loginmodal">
            Login
          </button>

          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#registermodal">
            Register
          </button>

        </div>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle bi-4x me-2"></i>User Login
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <!-- Modal For Register_Button -->
  <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill bi-4x me-2"></i>User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill text-bg-warning mb-3 text-wrap lh-base">Your details must match with your ID
              (Adhar Card, Passport, Driving Licence, etc.)
              that will be required during check-in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>

                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>


                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>

                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1">
</textarea>
                </div>


                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>


                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>


                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Conform Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-dark shadow-none"> Register </button>
                </div>

              </div>
            </div>
          </div>
      </div>



    </div>
    </form>
  </div>
  </div>
  </div>
  </div>




  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR Facilities</h2>
    <div class="h-line bg-dark"></div>



    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, asperiores.
      <br>Voluptatibus quos iste eum, error at qui quidem illum corporis
      ipsam repudiandae suscipit voluptatum aut! A autem magni minus voluptatum.
    </p>


  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">

            <i class='bx bx-wifi width= 80px'></i>
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis excepturi corrupti qui architecto,
            consequatur quasi laborum ab dolores quam ipsum vitae sit ex quas asperiores saepe iste voluptas at? Non.
          </p>

        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">

            <i class='bx bx-wifi width= 80px'></i>
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis excepturi corrupti qui architecto,
            consequatur quasi laborum ab dolores quam ipsum vitae sit ex quas asperiores saepe iste voluptas at? Non.
          </p>

        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">

            <i class='bx bx-wifi width= 80px'></i>
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis excepturi corrupti qui architecto,
            consequatur quasi laborum ab dolores quam ipsum vitae sit ex quas asperiores saepe iste voluptas at? Non.
          </p>

        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">

            <i class='bx bx-wifi width= 80px'></i>
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis excepturi corrupti qui architecto,
            consequatur quasi laborum ab dolores quam ipsum vitae sit ex quas asperiores saepe iste voluptas at? Non.
          </p>

        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">

            <i class='bx bx-wifi width= 80px'></i>
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis excepturi corrupti qui architecto,
            consequatur quasi laborum ab dolores quam ipsum vitae sit ex quas asperiores saepe iste voluptas at? Non.
          </p>

        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">

            <i class='bx bx-wifi width= 80px'></i>
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis excepturi corrupti qui architecto,
            consequatur quasi laborum ab dolores quam ipsum vitae sit ex quas asperiores saepe iste voluptas at? Non.
          </p>

        </div>
      </div>

    </div>
  </div>

  </div>
  </div>
  </div>



















  <?php require('include/footer.php');?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>

</html>