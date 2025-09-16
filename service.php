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
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg)">
                        10 Years Experience
                    </h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">
                            Our Natural Wellness Offerings
                        </h6>
                        <h1 class="mb-5">Explore Our Premium Makhana Snack Range</h1>
                    </div>

                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                        <!-- Service 1: Classic Roasted Makhana -->
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px">
                                <i class="fa fa-leaf fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Classic Roasted Makhana</h4>
                            <p>
                                Lightly roasted and salted for the perfect guilt-free snack.
                                Crisp, clean, and made without any additives or preservatives.
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>High in Protein &
                                Fiber
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Ideal for Fasting
                                & Everyday Snacking
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Gluten-Free &
                                Roasted, Not Fried
                            </p>
                            <a href="#" class="btn bg-white text-primary w-100 mt-2">
                                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
                            </a>
                        </div>

                        <!-- Service 2: Peri Peri Flavored Makhana -->
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px">
                                <i class="fa fa-fire fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Peri Peri Flavored Makhana</h4>
                            <p>
                                Spicy, tangy, and full of flavor — our Peri Peri makhana is a
                                bold snack made with natural seasonings and no artificial
                                flavor enhancers.
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Perfect for Spice
                                Lovers
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>No MSG or
                                Preservatives
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Vegan &
                                Keto-Friendly
                            </p>
                            <a href="#" class="btn bg-white text-primary w-100 mt-2">
                                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
                            </a>
                        </div>

                        <!-- Service 3: Mint Masala Makhana -->
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px">
                                <i class="fa fa-lemon fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Mint Masala Makhana</h4>
                            <p>
                                A refreshing twist on traditional snacks with a burst of mint
                                and zesty masala — great for digestion and flavor balance.
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Helps in
                                Digestion
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Natural Mint &
                                Spices
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Light & Airy
                                Texture
                            </p>
                            <a href="#" class="btn bg-white text-primary w-100 mt-2">
                                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
                            </a>
                        </div>

                        <!-- Service 4: Delivery & Quality Guarantee -->
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px">
                                <i class="fa fa-truck fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Fast Delivery & Quality Assurance</h4>
                            <p>
                                All our Makhanas are packed fresh, sealed airtight, and
                                delivered across India with a full quality and freshness
                                guarantee.
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Secure, Hygienic
                                Packaging
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>Ships PAN India
                            </p>
                            <p class="text-primary fw-medium">
                                <i class="fa fa-check text-success me-2"></i>COD & Online
                                Payment Available
                            </p>
                            <a href="#" class="btn bg-white text-primary w-100 mt-2">
                                Read More<i class="fa fa-arrow-right text-secondary ms-2"></i>
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
                            I’ve started adding Falhaar’s roasted makhana to my evening
                            snacks—so light, crunchy, and guilt-free. It’s now a regular in
                            my pantry!
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px" />
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Sarah M.</h5>
                    <p class="m-0">Verified Buyer</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            The Peri Peri Makhana is my new addiction! Just the right amount
                            of spice, and I don’t feel guilty at all after finishing a whole
                            pack.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px" />
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Jason K.</h5>
                    <p class="m-0">Sneaker Enthusiast</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            As a fitness trainer, I recommend Falhaar’s plain roasted
                            makhana to my clients. It’s high in protein, low in calories,
                            and totally clean.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px" />
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Leah R.</h5>
                    <p class="m-0">Fitness Trainer</p>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            The Mint Masala flavor is so refreshing! I love having it with
                            my afternoon tea—adds the perfect crunch and flavor without
                            being heavy.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px" />
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Amélie.</h5>
                    <p class="m-0">Runner & Shoe Collector</p>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            I ordered a combo pack of Falhaar’s flavored makhanas—each one
                            better than the last! Delivery was quick and the packaging was
                            so neat.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonials_1.webp"
                        style="width: 80px; height: 80px" />
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Emily S.</h5>
                    <p class="m-0">Lifestyle Blogger</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer -->
    <?php include('footer.php') ?>