<?php


function website_title($name="panda",$sad="Website"){
    return "Welcome to $name eCommerce $sad";
}
 



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="pic/favicon.png" type="image/x-icon">
    <!-- title -->
    <title><?php echo website_title()   ?></title>
    <!-- css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- main style file  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header started  -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="pic/Group_103_1_.png" alt="Bootstrap">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-block w-50" role="search">
                        <input class="form-control me-2 rounded-pill bg-light" type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#shoes">Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#backpack">Backpack</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- home slider -->
        <section id="home">
            <div id="carouselExampleControls" class="carousel slide container mt-5" data-bs-ride="carousel">
                <div class="carousel-inner bg-panda">
                    <div class="carousel-item active">
                        <div class="row  p-5 d-flex align-items-center">
                            <div class="col-lg-7">
                                <h2>Mi LED TV 4A PRO 32</h2>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia
                                    consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                </p>
                                <h3>$1289</h3>
                                <button class="btn btn-panda">BUY NOW</button>
                            </div>
                            <div class="col-lg-5">
                                <img src="pic/TV.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row  p-5 d-flex align-items-center">
                            <div class="col-lg-7">
                                <h2>Mi Headphone 4A PRO 32</h2>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia
                                    consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                </p>
                                <h3>$189</h3>
                                <button class="btn btn-panda">BUY NOW</button>
                            </div>
                            <div class="col-lg-5">
                                <img src="pic/headphone.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row  p-5 d-flex align-items-center">
                            <div class="col-lg-7">
                                <h2>Mi LED X Box 4A PRO 32</h2>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia
                                    consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                </p>
                                <h3>$289</h3>
                                <button class="btn btn-panda">BUY NOW</button>
                            </div>
                            <div class="col-lg-5">
                                <img src="pic/X box.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </header>
    <main>
        <section class="Categoies my-5">
            <div class="container">
                <h2>Categories</h2>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="p-3 border rounded-4 d-flex justify-content-between align-items-center bg-warning">
                            <h2 class="text-white">Watch</h2>
                            <img src="pic/trzcacak 1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="p-3 border rounded-4 d-flex justify-content-between align-items-center bg-primary">
                            <h2 class="text-white">Bag</h2>
                            <img src="pic/1214084-backpack-png-image-backpack-png-2000_2000 1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="p-3 border rounded-4 d-flex justify-content-between align-items-center bg-success">
                            <h2 class="text-white">Shoes</h2>
                            <img src="pic/trzcacak 2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- shoes section  -->
        <section id="shoes" class="container">
            <h2 class="my-3">Shoes</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 text-center border-0 shadow-lg">
                        <img src="pic/shoes-1.png" class="card-img-top" alt="...">
                        <div>
                            <h5 class="card-title">Reebok Dart Men’s Shoes</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint. </p>
                            <h2>$1289</h2>
                        </div>
                        <div class="m-5">
                            <button class="btn btn-panda">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center border-0 shadow-lg">
                        <img src="pic/shoes-2.png" class="card-img-top" alt="...">
                        <div>
                            <h5 class="card-title">Reebok Pump</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint. </p>
                            <h2>$799</h2>
                        </div>
                        <div class="m-5">
                            <button class="btn btn-panda">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center border-0 shadow-lg">
                        <img src="pic/shoes-3.png" class="card-img-top" alt="...">
                        <div>
                            <h5 class="card-title">Reebok All Terrain</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint. </p>
                            <h2>$699</h2>
                        </div>
                        <div class="m-5">
                            <button class="btn btn-panda">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- bage section  -->

        <section id="backpack" class="container my-5">
            <h2 class="my-3">Backpack</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 text-center border-0 shadow-lg">
                        <img src="pic/bag1.png" class="card-img-top" alt="...">
                        <div>
                            <h5 class="card-title">Ison Backpack</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.</p>
                            <h2>$1289</h2>
                        </div>
                        <div class="m-5">
                            <button class="btn btn-panda">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center border-0 shadow-lg">
                        <img src="pic/bag2.png" class="card-img-top" alt="...">
                        <div>
                            <h5 class="card-title">Biaowang Backpack</h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.</p>
                            <h2>$799</h2>
                        </div>
                        <div class="m-5">
                            <button class="btn btn-panda">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center border-0 shadow-lg">
                        <img src="pic/bag3.png" class="card-img-top" alt="...">
                        <div>
                            <h5 class="card-title">Dxyizu WS54 Smart
                            </h5>
                            <p class="card-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint.</p>
                            <h2>$699</h2>
                        </div>
                        <div class="m-5">
                            <button class="btn btn-panda">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" style="height: 400px;"
            class="container bg-panda rounded-4 p-5 d-flex justify-content-center align-items-center">
            <div>
                <h2>LET'S STAY IN TOUCH</h2>
                <p>Get updates on sales specials and more</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control border-0" placeholder="Enter your email"
                        aria-label="Enter your email" aria-describedby="button-addon2">
                    <button class="btn btn-panda" type="button" id="button-addon2">SEND</button>
                </div>
            </div>
        </section>
    </main>
    <!-- footer started  -->
    <footer>
        <p class="text-center my-5"><small>Copyright 2023 &copy; All Right Reserved By NABIL</small></p>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>