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

    <!-- Page Header -->
    <div class="container-fluid py-5 text-center text-white" style="background-color: #2c3e50;">
        <div class="container">
            <h1 class="display-4 fw-bold" data-aos="fade-down">Food Box</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">
                Sturdy. Leak-Proof. Perfect for Takeaway & Delivery.
            </p>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Product Details -->
    <div class="container-fluid py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="img/foodBox.jpeg" style="width: 100%; height: auto;" class="img-fluid rounded shadow-sm"
                        alt="Food Box">
                </div>

                <!-- Text Section -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="mb-3" style="color: #27ae60;">Food Box</h2>
                    <p class="text-muted">
                        Our eco-friendly food boxes are the perfect solution for packaging and serving meals on the go.
                        Designed for strength and convenience, they are ideal for restaurants, cloud kitchens, food
                        stalls,
                        and catering services. Made from biodegradable material and safe for hot, oily, or cold foods.
                    </p>

                    <ul class="list-unstyled">
                        <li>🍱 Made with eco-safe, food-grade material</li>
                        <li>🧼 Leak-proof and grease-resistant design</li>
                        <li>♻️ Biodegradable and compostable</li>
                        <li>🍔 Suitable for hot, cold, or oily foods</li>
                        <li>🚀 Great for takeout, delivery, and events</li>
                    </ul>

                    <button class="btn btn-success mt-3 shadow" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Enquiry Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details -->

    <!-- footer -->
    <?php include('footer.php') ?>

    
