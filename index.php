<?php include "./data/products.php"; ?>
<?php include "./data/categories.php"; ?>
<?php include "./data/banner.php"; ?>




<?php include "./layout/header.php"; ?>
<style>
    .selector-for-some-widget {
        box-sizing: content-box;
    }
</style>
</head>

<body>
    <?php include "./layout/menu.php"; ?>

    <section class="lattest-product">
        <div class="container-fluid">
            <div class="my-container">
                <div class="row ">
                    <div class="col-12">
                        <div class="carousel slide carousel-fade position-sticky" id="demo" data-bs-ride="carousel">

                            <div class="carousel-indicators  ">
                                <button type="button" class="active" data-bs-target="#demo"
                                    data-bs-slide-to="0"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            </div>

                            <div class="carousel-inner">
                                <?php foreach ($banners as $key => $value) { ?>
                                    <div class="carousel-item active">
                                        <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt=""
                                            class="d-block w-100">
                                        <div class="head position-absolute  ">
                                            <h1>
                                                New Rang Of <br>
                                                <?php echo $value['title']; ?>
                                            </h1>
                                            <p class="text-muted">
                                                <?php echo $value['model']; ?>
                                            </p>
                                            <a href="#" class="btn btn-img ">Shop Now</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <button type="button" class="carousel-control-prev" data-bs-target="#demo"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon "></span>
                            </button>
                            <button type="button" class="carousel-control-next" data-bs-target="#demo"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon "></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fasilities">
        <div class="container-fluid">
            <hr>
            <div class="container">
                <div class="row my-5">
                    <div class=" offer  col md-6 ms-2 ">
                        <div class="items d-flex ">
                            <img src="./assets/images/icons/policy1.png" alt="icon">

                            <div class="card-body ">
                                <h6 class="card-title">Free Shipping</h6>
                                <span class="card-text"> <small class="muted"> Free shipping on all US order
                                    </small>
                                </span>
                            </div>
                        </div>



                        <div class="items d-flex ">
                            <img src="./assets/images/icons/policy2.png" alt="icon">

                            <div class="card-body ">
                                <h6 class="card-title">Free Shipping</h6>
                                <span class="card-text"> <small class="muted"> Free shipping on all US order
                                    </small>
                                </span>
                            </div>
                        </div>

                        <div class="items d-flex ">
                            <img src="./assets/images/icons/policy3.png" alt="icon">

                            <div class="card-body ">
                                <h6 class="card-title">Free Shipping</h6>
                                <span class="card-text"> <small class="muted"> Free shipping on all US order
                                    </small>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class=" offer  col md-6 ms-2 ">
                        <div class="v-line ">
                            <div class="items d-flex ">
                                <img src="./assets/images/icons/policy4.png" alt="icon">
                                <div class="card-body ">
                                    <h6 class="card-title">Free Shipping</h6>
                                    <span class="card-text"> <small class="muted"> Free shipping on all US order
                                        </small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="v-line">
                            <div class="items d-flex ">
                                <img src="./assets/images/icons/policy5.png" alt="icon">
                                <div class="card-body ">
                                    <h6 class="card-title">Free Shipping</h6>
                                    <span class="card-text"> <small class="muted"> Free shipping on all US order
                                        </small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>


    <section class="new-product">
        <div class="container-fluid">
            <div class="container">
                <div class="row d-flex">
                    <div class=" switch-pegination row my-3">
                        <div class="col-3 text-center">
                            <h3>New Arrivals</h3>
                        </div>
                        <div class="col-7  d-flex justify-content-center ">
                            <div class="middle product-list d-flex align-self-center ">
                                <a href="#">Computer</a>
                                <a href="#">Smart Phone</a>
                                <a href="#">Video Games</a>
                                <a href="#">Toys</a>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-lg-center">
                            <div class="pegination d-flex align-self-center ">
                                <a href="">&larr; </a>
                                <a href="">&rarr; </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme ">
                            <?php foreach ($products as $key => $value) { ?>

                                <div class="item">
                                    <div class="card ">
                                        <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="...">
                                        <div class="card-body ">
                                            <h6 class="card-title"><a href="" class="text-uppercase">
                                                    <?php echo $value['name']; ?>
                                                </a></h6>
                                            <p class="my-2"><a href="" class="d-block ">
                                                    <?php echo $value['description']; ?>
                                                </a></p>
                                            <div class="stars-rating">
                                                <ul class="stars list-unstyled d-flex mt-">
                                                    <li class="star">
                                                        <i class="fas fa-sm fa-star"></i>
                                                    </li>
                                                    <li class="star">
                                                        <i class="fas fa-sm fa-star"></i>
                                                    </li>
                                                    <li class="star">
                                                        <i class="fas fa-sm fa-star"></i>
                                                    </li>
                                                    <li class="star">
                                                        <i class="fas fa-sm fa-star"></i>
                                                    </li>
                                                    <li class="star me-3">
                                                        <i class="fas fa-sm fa-star"></i>
                                                    </li>
                                                    <span><a href="">(5 Reviews)</a></span>
                                                </ul>
                                            </div>
                                            <span class="h5">
                                                <?php echo $value['price']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="banner-w">
        <div class="container-fluid mt-5 ">
            <div class="my-container">
                <div class=" banner row d-flex justify-content-evenly">
                    <div class="col-md-4 ">
                        <img src="./assets/images/banners/home1-banner1-1.jpg" alt="">

                    </div>
                    <div class="col-md-4 ">
                        <img src="./assets/images/banners/home1-banner1-2.jpg" alt="">

                    </div>
                    <div class="col-md-4 ">
                        <img src="./assets/images/banners/home1-banner1-3.jpg" alt="">

                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="F-categories">
        <div class="container-fluid my-3">
            <div class="my-container">
                <div class="row d-flex mb-3">
                    <div class="col-3 text-center">
                        <h4>Featured Categories</h4>
                    </div>
                    <div class="col-md-9 align-self-center d-flex justify-content-start">
                        <div class="horizontle-line "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" categories-card ">
        <div class="container-fluid">
            <div class="my-container">
                <div class="row g-3 d-flex justify-content-evenly home-categories ">
                    <?php foreach ($categories as $key => $value) { ?>
                        <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6  mb-4">
                            <div class="py-3 card d-flex flex-row align-self-center ">
                                <div class="card-body ">
                                    <h6 class="card-title">
                                        <?php echo $value['title']; ?>
                                    </h6>
                                    <p class="card-text">
                                        <?php echo $value['description']; ?>
                                    </p>
                                    <a href="#">+ Shop Now</a>
                                </div>
                                <figure class="figure">
                                    <div class="single-image-wrapper">
                                        <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="..."
                                            alt="product-image" style="width: 100px; height: 100px;">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="items d-flex ">
            <img src="./assets/images/icons/policy2.png" alt="icon">

            <div class="card-body ">
                <h6 class="card-title">Free Shipping</h6>
                <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
                </span>
            </div>
        </div>
        <div class="v-line"> </div>

        <div class="items d-flex ">
            <img src="./assets/images/icons/policy3.png" alt="icon">

            <div class="card-body ">
                <h6 class="card-title">Free Shipping</h6>
                <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
                </span>
            </div>
        </div>
        <div class="v-line"> </div>

        <div class="items d-flex ">
            <img src="./assets/images/icons/policy4.png" alt="icon">

            <div class="card-body ">
                <h6 class="card-title">Free Shipping</h6>
                <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
                </span>
            </div>
        </div>
        <div class="v-line"> </div>

        <div class="items d-flex ">
            <img src="./assets/images/icons/policy5.png" alt="icon">

            <div class="card-body ">
                <h6 class="card-title">Free Shipping</h6>
                <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
                </span>
            </div>
        </div>

    </section>
    <?php include "./layout/footer.php"; ?>