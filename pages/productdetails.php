<?php include "../data/products.php"; ?>
<?php include "../layout/header.php"; ?>
</head>

<body>
    <?php include "../layout/menu.php"; ?>
    <section id="product" class="product-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mt-5">
                    <div class="figure card">
                        <img id="zoom_04" src="../assets/images/products/4-sm.jpg"
                            data-zoom-image="../assets/images/products/4-sm.jpg" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 mt-5">
                    <div class="row  d-flex">
                        <div class="col-lg-10 col-xl-10">
                            <div class=" h4 product-header ">
                                Aliquam lobortis est turpis mauris
                            </div>
                        </div>
                        <div class="col-lg-2 col-xl-2">
                            <nav aria-label="product-navigation d-inline">
                                <ul class="pagination ">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&lt;</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"> &gt;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
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
                                    <span class="customer-reviews"><a href="">(1 customer Reviews)</a></span>
                                </ul>
                            </div>
                            <span class="h5 goods-price">$55.00</span>
                            <p class="good-discription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea
                                quod fuga aspernatur, nisi
                                sapiente consequuntur eos suscipit magnam earum eveniet nobis facere tenetur dolorem
                                accusantium totam cumque numquam repellat id ipsum reiciendis nam quaerat ullam! Autem
                                itaque modi cum aliquid.</p>
                            <div class="qty-btn-control">
                                <input type="number" name="quantity" id="">
                                <button class="btn btn-primary" type="submit">add to cart</button>
                            </div>
                            <div class="add-fav">
                                <a href="" class="heart">Add to Wishlist</a>
                                <a href="" class="compare"> Compare</a>
                            </div>
                            <hr>
                            <div class="categories-product">
                                <span>CATEGORY:<a href="">Computer</a></span><br>
                                <span>TAGS:<a href="">blouse</a>,<a href="">fashion</a></span>
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

    <section id="related-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme ">
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/2.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/3.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/4.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/2.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/3.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/4.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="upsale-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme ">
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/2.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/3.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/4.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/2.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/3.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="../assets/images/products/4.jpg" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
                                    <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
                                            Pretium </a></p>
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
                                            <span><a href="">(1 Reviews)</a></span>
                                        </ul>
                                    </div>
                                    <span class="h5">$55.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact mt-5">
        <div class="container-fluid ">
            <div class="container">
                <div class="row d-flex align-items-center" style="height: 10rem;">
                    <div class="col-4 ">
                        <div>
                            <h5 class="mb-0 mt-2">
                                Sign Up For Newsletters
                            </h5>
                            <p class="small text-muted">
                                Be the First to Know. Sign up for newsletter today
                            </p>
                        </div>
                    </div>
                    <div class="col-5 d-flex justify-content-end  ">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 " placeholder="Enter Your E-mail Address"
                                aria-label="Input group example" aria-describedby="btnGroupAddon">
                            <button type="button" class="btn btn-sm-yellow">Subscribe</button>
                        </div>
                    </div>
                    <div class=" social-icon col-3 d-flex  ">
                        <a href="">
                            <i class="fab fa-facebook-f fa-1x"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-twitter fa-1x"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-instagram fa-1x"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-linkedin-in fa-1x"></i>
                        </a>
                        <a href="">
                            <i class="fas fa-rss fa-1x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "../layout/footer.php"; ?>