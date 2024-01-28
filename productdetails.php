<?php include "./layout/header.php"; ?>


<?php

$product = null;
$category = null;

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    foreach ($products as $key => $value) {
        if ($value['id'] == $id) {
            $product = $value;
        }
    }

} else {
    exit;
}
if ($product == null) {
    echo 'ID Not valid';
    exit;
}

if (isset($product['category_id'])) {
    foreach ($categories as $cat) {
        if ($cat['id'] == $product['category_id']) {
            $category = $cat;
        }
    }
}








// var_dump($product);

?>


</head>

<body>
    <?php include "./layout/menu.php"; ?>
    <section id="product" class="product-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mt-5">
                    <div class="figure card">
                        <img id="zoom_04" src="<?php echo BASE_URL . '/' . $product['image']; ?>"
                            data-zoom-image="<?php echo BASE_URL . '/' . $product['image']; ?>" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 mt-5">
                    <div class="row  d-flex">
                        <div class="col-lg-10 col-xl-10">
                            <div class=" h4 product-header ">
                                <?php echo $product['name']; ?>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">

                            <span class="h5 goods-price">$
                                <?php echo $product['price']; ?>
                            </span>
                            <p class="good-discription">
                                <?php echo $product['description']; ?>
                            </p>
                            <div class="qty-btn-control">
                                <input type="number" name="quantity" value="number" id="">
                                <button href="#" class="btn btn-primary" type="submit">add to cart</button>
                            </div>

                            <hr>
                            <div class="categories-product">
                                <?php if ($category != null) { ?>
                                    <span>CATEGORY:<a href="">
                                            <?php echo $category['title'] ?>
                                        </a></span><br>
                                <?php } ?>
                            </div>
                            <hr>
                            <div class="product-shere d-flex">
                                <h3 class="product-header">shere this product:</h3>
                                <ul class="list-unstyled d-flex">
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href=""><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="header">
                        <ul class="d-flex  justify-content-center list-unstyled">
                            <li><a data-bs-toggle="collapse" class="discription" href="#discription" role="button"
                                    aria-expanded="false" aria-controls="discription">
                                    discription</a></li>
                            <li><a data-bs-toggle="collapse" class="reviews" href="#reviews" role="button"
                                    aria-expanded="false" aria-controls="reviews">
                                    reviews</a></li>
                        </ul>
                    </div>
                    <div class="collapse" id="discription">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed when the user activates the relevant trigger.
                        </div>
                    </div>

                    <div class="collapse" id="reviews">
                        <div class="card card-body">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quaerat dicta
                                expedita deleniti cupiditate, nemo dolorem aperiam beatae quae aspernatur corporis
                                libero? Qui iste quis fugit necessitatibus natus sed laborum.
                            </p>
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "./layout/footer.php"; ?>