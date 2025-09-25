<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
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
                                Harvested from trusted beekeepers, our honey is 100% pure, chemical-free, and packed
                                with natural goodness.
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
                                Made using age-old methods, our ghee is aromatic, nutrient-rich, and perfect for a
                                healthy lifestyle.
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
                                Handcrafted from natural coconut shells, our eco-friendly kitchenware combines
                                durability with sustainability.
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
                                Safe, reusable, and eco-friendly — our wooden spoons, forks, and cutlery sets bring
                                nature to your dining table.
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
    <!-- Service End -->

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
                            The quality is excellent and it feels so natural to use eco-friendly products in my daily
                            life.
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
    <!-- Testimonial End -->

    <!-- Footer -->
    <?php include('footer.php') ?>