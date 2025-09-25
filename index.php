<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Cocofern</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />

  <style>
    .service-item-top .overflow-hidden {
      height: 300px;
    }

    .service-item-top img {
      height: 100%;
      object-fit: cover;
    }
  </style>

  <style>
    /* Border for navbar */
    .navbar {
      border-bottom: 1px solid #ddd;
    }

    /* Offcanvas styling */
    .offcanvas {
      border-left: 1px solid #ccc;
    }

    /* Hover effect for links */
    .submenu-link {
      color: #333;
      text-decoration: none;
      transition: all 0.2s ease-in-out;
    }

    .submenu-link:hover {
      padding-left: 5px;
      color: #007bff;
    }

    /* Submenu slide toggle animation (optional JS needed for toggling) */
    .submenu {
      transition: max-height 0.3s ease;
      overflow: hidden;
    }

    /* Button toggle indicator */
    .toggle-submenu i {
      transition: transform 0.3s ease;
    }

    /* Rotate icon when submenu is open */
    .toggle-submenu.open i {
      transform: rotate(180deg);
    }
  </style>

</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Header -->
  <?php include('header.php') ?>

  <!-- Carousel Section Start -->
  <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">

      <!-- === Banner Slide 1 (Coconut Shell Products) === -->
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/pro_4.jpeg" alt="Coconut Shell Products Banner"
          style="height: 673px; object-fit: cover;" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(0, 0, 0, 0.4);">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  Eco-Friendly Key Chain
                </h5>
                <h1 class="display-3 text-white animated slideInDown mb-4">
                  Wodden Key Chain
                </h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                  Discover sustainable, handcrafted wooden keychains made from natural wood. Lightweight, durable, and
                  eco-friendly — a perfect blend of style and utility for your everyday essentials.
                </p>
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                  Shop Now
                </a>
                <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                  Learn More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- === Banner Slide 2 (Wooden Spoon) === -->
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="img/Wooden-spoon.jpeg" alt="Wooden Spoon Banner"
          style="height: 673px; object-fit: cover;" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(0, 0, 0, 0.4);">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  Natural Dining Essentials
                </h5>
                <h1 class="display-3 text-white animated slideInDown mb-4">
                  Premium Wooden Spoons & Cutlery
                </h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                  Add a rustic touch to your dining with finely crafted
                  wooden spoons, forks, and cutlery. Safe, reusable, and
                  made from high-quality wood for everyday use.
                </p>
                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                  Buy Now
                </a>
                <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                  Explore Collection
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Carousel Section End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
          <div class="overflow-hidden">
            <img class="img-fluid w-100" height="500px" src="img/Coconut-shell-kitchen-made.jpeg" alt="" />
          </div>
          <div class="d-flex align-items-center justify-content-between bg-light p-4">
            <h5 class="text-truncate me-3 mb-0"></h5>
            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
          <div class="overflow-hidden">
            <img class="img-fluid w-100 h-100" src="img/Honey.jpg" alt="" />
          </div>
          <div class="d-flex align-items-center justify-content-between bg-light p-4">
            <h5 class="text-truncate me-3 mb-0">

            </h5>
            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
          <div class="overflow-hidden">
            <img class="img-fluid w-100 h-100" src="img/Ghee.jpg" alt="" />
          </div>
          <div class="d-flex align-items-center justify-content-between bg-light p-4">
            <h5 class="text-truncate me-3 mb-0"></h5>
            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- About Us Section Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">

        <!-- Left Column: Text Content -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-secondary text-uppercase">About Us</h6>
          <h1 class="mb-4">
            Cocofern – Nature’s Goodness, Packed with Care
          </h1>
          <p class="mb-4">
            At Cocofern, we are dedicated to delivering premium organic and eco-friendly products
            that bring health and sustainability to your lifestyle. From pure <strong>Ghee</strong>
            and natural <strong>Honey</strong> to handcrafted <strong>coconut shell kitchenware</strong>,
            wooden cutlery, and other sustainable essentials — every product is carefully chosen to
            ensure purity, quality, and eco-conscious living.
          </p>
          <p class="fw-medium text-primary">
            <i class="fa fa-check text-success me-3"></i>Pure & Natural Honey, Rich in Nutrients
          </p>
          <p class="fw-medium text-primary">
            <i class="fa fa-check text-success me-3"></i>Traditional Cow Ghee for Health & Wellness
          </p>
          <p class="fw-medium text-primary">
            <i class="fa fa-check text-success me-3"></i>Eco-Friendly Kitchenware & Wooden Cutlery
          </p>
          <p class="fw-medium text-primary">
            <i class="fa fa-check text-success me-3"></i>Committed to Organic & Sustainable Living
          </p>

          <!-- Contact Box -->
          <div class="bg-primary d-flex align-items-center p-4 mt-5">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
              style="width: 60px; height: 60px;">
              <i class="fa fa-phone-alt fa-2x text-primary"></i>
            </div>
            <div class="ms-3">
              <p class="fs-5 fw-medium mb-2 text-white">Customer Support</p>
              <h3 class="m-0 text-secondary">+91 7010431898</h3>
            </div>
          </div>
        </div>

        <!-- Right Column: Images -->
        <div class="col-lg-6 pt-4" style="min-height: 500px;">
          <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
            <img class="position-absolute img-fluid w-100 h-100" src="img/Coconut-shell-kitchen-made.jpeg"
              style="object-fit: cover; padding: 0 0 50px 100px;" alt="Cocofern Organic Products" />
            <!-- <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
            src="img/Ghee.jpg" style="object-fit: contain;" alt="Cocofern Ghee & Honey" /> -->
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end about -->

  <!-- Products Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">Our Products</h6>
        <h1 class="mb-5">
          Experience the Beauty of Nature with Ganesh Nursery’s Outdoor Plants – Lush, Vibrant, and Rooted in Wellness
        </h1>
      </div>
      <div class="row g-4 justify-content-center">

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Coconut-shell-kitchen-made_new.jpeg" style="height: 200px;" width="auto" class="card-img-top"
              alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Coconut shell kitchen made</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Coconut-shell-kitchen-made.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/pro_10.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">FULAIDA Coconut Shell Cup</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="FULAIDA-Coconut-Shell-Cup.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Wooden-spoon.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Handmade Coconut Shell Kitchen Spoon</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Handmade-Coconut-Shell-Kitchen-Spoon.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Hand-bag.jpg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Hand Bag</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Hand-Bag.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Honey.jpg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Honey</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Honey.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/Disposable-spoon.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Wodden Spoon</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Wodden-Spoon.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/paper-cup.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Paper Cup</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Paper-Cup.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/paper-glass.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Paper Glass</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Paper-Glass.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/foodBox.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Food Box</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Food-Box.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/wodden_candy_stick.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Wodden Candy Stick</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Wodden-Candy-Stick.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/tablet_tissue.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Tablet Tissue</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Tablet-Tissue.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/paper_straw.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Paper Straw</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Paper-Straw.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/pro_11.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Coconut Shell Crafted Serving Spoons</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Coconut-Serving-Spoons.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/pro_2.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Peekar Handmade Coconut Wood</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Peekar-Handmade-Coconut-Wood.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/pro_4.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Coconut Key Chain</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Coconut-Key-Chain.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/pro_5.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Sahya Dale Coconut Shell Puttu</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Sahya-Dale-Coconut-Shell-Puttu.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/pro_7.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Wodden Cutlery</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Wodden-Cutlery.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card h-100 shadow-sm">
            <img src="img/pro_8.jpeg" style="height: 200px" class="card-img-top" alt="Himalayan" />
            <div class="card-body text-center">
              <h5 class="card-title mb-3">Plastic Container </h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                <a href="Plastic-Container.php" class="btn btn-outline-primary px-3">Details</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--   Products End -->

  <!-- Fact Start -->
  <div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
          <i class="fa fa-check fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
          <p class="text-white mb-0">Years Experience</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
          <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">34</h2>
          <p class="text-white mb-0">Running Projects</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
          <i class="fa fa-users fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">235</h2>
          <p class="text-white mb-0">Satisfied Clients</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
          <i class="fa fa-wrench fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">134</h2>
          <p class="text-white mb-0">Complete Projects</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Fact End -->

  <!-- Product/Service Section Start -->
  <div class="container-fluid py-5 px-4 px-lg-0">
    <div class="row g-0">

      <!-- Sidebar Experience Banner -->
      <div class="col-lg-3 d-none d-lg-flex">
        <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
          <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg)">
            10 Years Experience
          </h1>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-12 col-lg-9">
        <div class="ms-lg-5 ps-lg-5">
          <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Natural Collection</h6>
            <h1 class="mb-5">Explore Premium Products by Cocofern</h1>
          </div>

          <!-- Carousel of Services/Products -->
          <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">

            <!-- Product Category 1: Pure Honey -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-seedling fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Pure & Natural Honey</h4>
              <p>
                Harvested from trusted beekeepers, our honey is 100% pure, chemical-free, and packed with natural
                goodness.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Rich in Antioxidants
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Supports Immunity & Digestion
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>No Preservatives Added
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Shop Honey<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>

            <!-- Product Category 2: Traditional Ghee -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-burn fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Traditional Cow Ghee</h4>
              <p>
                Made using age-old methods, our ghee is aromatic, nutrient-rich, and perfect for a healthy lifestyle.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Boosts Immunity & Energy
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Rich Source of Healthy Fats
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Ideal for Daily Cooking
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Shop Ghee<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>

            <!-- Product Category 3: Eco-Friendly Kitchenware -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-utensils fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Coconut Shell Kitchenware</h4>
              <p>
                Handcrafted from natural coconut shells, our eco-friendly kitchenware combines durability with
                sustainability.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Reusable & Biodegradable
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Unique & Stylish Design
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Perfect for Modern Kitchens
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Shop Kitchenware<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>

            <!-- Product Category 4: Wooden Cutlery -->
            <div class="bg-light p-4">
              <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                style="width: 75px; height: 75px">
                <i class="fa fa-spoon fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Wooden Spoons & Cutlery</h4>
              <p>
                Safe, reusable, and eco-friendly — our wooden spoons, forks, and cutlery sets bring nature to your
                dining table.
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Crafted from Natural Wood
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Durable & Long-Lasting
              </p>
              <p class="text-primary fw-medium">
                <i class="fa fa-check text-success me-2"></i>Perfect for Eco-Conscious Living
              </p>
              <a href="#" class="btn bg-white text-primary w-100 mt-2">
                Shop Cutlery<i class="fa fa-arrow-right text-secondary ms-2"></i>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product/Service Section End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h6 class="text-secondary text-uppercase">Testimonial</h6>
        <h1 class="mb-5">What Our Customers Say</h1>
      </div>

      <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">

        <!-- Testimonial 1 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              I purchased Cocofern’s coconut shell kitchenware and wooden spoons.
              The quality is excellent and it feels so natural to use eco-friendly products in my daily life.
              Highly satisfied!
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/sneha_testimonials.jpg"
            style="width: 80px; height: 80px" alt="Customer" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Sneha Sharma</h5>
          <p class="m-0">Eco-conscious Buyer</p>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              Cocofern’s honey and ghee are 100% pure and organic.
              The taste and aroma are authentic, just like homemade.
              I trust their products for my family’s health.
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/amit_testimonials.jpg"
            style="width: 80px; height: 80px" alt="Customer" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Amit Mehta</h5>
          <p class="m-0">Health Enthusiast</p>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              I loved the coconut shell bowls I ordered. They look beautiful and
              are perfect for serving desserts and snacks. A great eco-friendly alternative!
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/ravi_testimonials.jpg"
            style="width: 80px; height: 80px" alt="Customer" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Ravi Kapoor</h5>
          <p class="m-0">Verified Buyer</p>
        </div>

        <!-- Testimonial 4 -->
        <div class="testimonial-item text-center">
          <div class="testimonial-text bg-light text-center p-4 mb-4">
            <p class="mb-0">
              The wooden cutlery from Cocofern is sturdy and reusable.
              I’ve switched completely from plastic to their eco-friendly products. Highly recommend!
            </p>
          </div>
          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/neha_testimonials.jpg"
            style="width: 80px; height: 80px" alt="Customer" />
          <div class="mb-2">
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
            <small class="fa fa-star text-secondary"></small>
          </div>
          <h5 class="mb-1">Neha Singh</h5>
          <p class="m-0">Restaurant Owner</p>
        </div>

      </div>
    </div>
  </div>
  <!--  Testimonial End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <!-- Left Section -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-secondary text-uppercase">Get In Touch</h6>
          <h1 class="mb-4">Contact For Any Query</h1>
          <p class="mb-4">
            Have questions about our products, your order, or anything else?
            We're here to help! Reach out to us anytime and our support team
            will get back to you as soon as possible.
          </p>
          <iframe class="position-relative w-100"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d252767.11821614578!2d77.24681315544755!3d8.153667666714764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s6%2F118%2FA%20southstreet%20%2C%20andarkulam%2C%20RAMAPURAM%20POST%20KANYAKUMARI%20TAMILNADU%20INDIA%20(629302)!5e0!3m2!1sen!2sin!4v1758099420306!5m2!1sen!2sin"
            frameborder="0" style="height: 300px; border: 0" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>

        <!-- Right Section (Form) -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="bg-light p-5 h-100 d-flex align-items-center">

            <form onsubmit="whatsappForm(event)">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="Your Email" />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                      style="height: 150px"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- footer -->
  <?php include('footer.php') ?>