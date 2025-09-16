<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Falhaar</title>
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- All products -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Products</h6>
                <h1 class="mb-5">
                    Experience the Essence of Purity with Nature Wings Saffron – Rich in
                    Aroma, Flavor & Wellness
                </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="img/makhana_pro_1.jpg" style="height: 200px" class="card-img-top" alt="Himalayan" />
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Tandoori Makhana</h5>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#enquiryModal">Enquiry</a>
                                <a href="Tandoori-Makhana.php" class="btn btn-outline-primary px-3">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="img/makhana_pro_2.webp" style="height: 200px" class="card-img-top" alt="Kashmiri" />
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Peri-Peri Makhana</h5>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#enquiryModal">Enquiry</a>
                                <a href="Peri-Peri-Makhana.php" class="btn btn-outline-primary px-3">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="img/makhana_pro_3.jpg" style="height: 200px" class="card-img-top" alt="MONGRA" />
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Masala Makhana</h5>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#enquiryModal">Enquiry</a>
                                <a href="Masala-Makhana.php" class="btn btn-outline-primary px-3">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->

    <?php include('footer.php') ?>