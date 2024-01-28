<?php include "./layout/header.php";
$data = $products;
//Filter Category Products
// if (isset($_GET['category_id'])) {
//     $filterproducts = [];
//     $category_id = $_GET['category_id'];
//     foreach ($data as $key => $value) {
//         if ($value['category_id'] == $category_id) {

//             array_push($filterproducts, $value);
//         }
//     }
//     $data = $filterproducts;
// }
?>
<style>
    .selector-for-some-widget {
        box-sizing: content-box;
    }

    .fasilities .owl-dots,
    .fasilities .owl-nav {
        display: none;
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
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                            </div>
                            <div class="carousel-inner bg-secondary">
                                <div class=" carousel-item  active">

                                    <div class="head  ">
                                        <h1>
                                            New Rang Of <br> Samsung Camera
                                        </h1>
                                        <p class="text-muted">Samsung E-4-40 / CX-100></p>

                                        <a href="<?php echo BASE_URL . '/shop.php?category_id=' ?>"
                                            class="btn btn-img ">Shop Now</a>

                                    </div>
                                    <div class="figure">
                                        <img src="<?php echo BASE_URL ?>/assets/images/products/1.png" alt=""
                                            class="d-block ">
                                    </div>

                                </div>
                                <?php foreach ($categories as $key => $value) { ?>

                                    <div class="carousel-item">

                                        <div class="head">


                                            <h1>
                                                New Rang Of <br>
                                                <?php echo $value['title']; ?>
                                            </h1>
                                            <p class="text-muted">
                                                <?php echo $value['description']; ?>
                                            </p>
                                            <a href="<?php echo BASE_URL . '/shop.php?category_id=' . $value['id']; ?>"
                                                class="
                                                btn btn-img ">
                                                Shop Now
                                            </a>
                                        </div>
                                        <div class=" figure">

                                            <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt=""
                                                class="d-block">
                                        </div>


                                    </div>

                                <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fasilities">
        <div class="container-fluid">

            <div class="row ">
                <div class="col-12 ">
                    <div class="owl-carousel ">
                        <?php foreach ($our_fasilities as $key => $value) { ?>
                            <div class=" items mb-2">
                                <div class="figure">
                                    <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="icon">
                                </div>
                                <div class="card-body ">
                                    <h6 class="card-title">
                                        <?php echo $value['title']; ?>
                                    </h6>
                                    <span class="card-text"> <small class="muted">
                                            <?php echo $value['discription']; ?>
                                        </small>
                                    </span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="headers-decoration">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-3 ">
                    <h2 class="mb-0">New Products</h2>
                </div>
                <div class="col-9 ">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="new-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme ">
                        <?php foreach ($products as $key => $value) { ?>
                            <div class="item">
                                <div class="card ">
                                    <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="...">
                                    <div class="card-body ">
                                        <h6 class="card-title"><a
                                                href="<?php echo BASE_URL . '/productdetails.php?id=' . $value['id']; ?>"
                                                class="text-uppercase">
                                                <?php echo $value['name']; ?>
                                            </a></h6>
                                        <p class="my-2"><a href="" class="d-block ">
                                                <?php echo $value['description']; ?>
                                            </a></p>
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
    </section>
    <section class="banner-w">
        <div class="container-fluid mt-5 ">
            <div class="my-container">
                <div class=" banner row d-flex justify-content-evenly ">
                    <?php foreach ($adds_image_banners as $key => $value) { ?>
                        <div class="col-md-3 ">
                            <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="headers-decoration">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-3 ">
                    <h2 class="mb-0">New Categories</h2>
                </div>
                <div class="col-9 ">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <section class=" categories-card ">
        <div class="container-fluid">
            <div class="my-container">
                <div class="row g-3 d-flex justify-content-evenly home-categories ">
                    <?php foreach ($categories as $key => $value) {
                        if ($value['featured']) {
                            ?>
                            <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6  mb-1">
                                <div class="py-3 card d-flex flex-row align-self-center ">
                                    <div class="card-body ">
                                        <h6 class="card-title fw-bold">

                                            <?php echo $value['title']; ?>

                                        </h6>
                                        <p class="card-text text-muted">
                                            <?php echo $value['description']; ?>
                                        </p>
                                        <a href="<?php echo BASE_URL . '/shop.php?category_id=' . $value['id']; ?>">+
                                            Shop Now</a>
                                    </div>
                                    <figure class="figure">
                                        <div class="single-image-wrapper ">
                                            <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="..."
                                                alt="product-image" style="width: 100px; height: 100px;">
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <?php include "./layout/footer.php"; ?>