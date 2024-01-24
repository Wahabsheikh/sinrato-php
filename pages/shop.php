<?php
include "../data/products.php";
?>


<?php include "../layout/header.php"; ?>

</head>

<body>
  <?php include "../layout/menu.php"; ?>

  <section class="content-aria">
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-3 ps-5">
          <div class="row mb-5">
            <div class="card">
              <h5 class="fw-bold p-4">Categories</h5>
              <div id="accordionPanelsStayOpenExample">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <a class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Computer
                  </a>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <ul class="list-unstyled">
                      <li><a href=""> Laptop</a></li>
                      <li><a href=""> Tablet</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <ul class="list-unstyled">
                <li>
                  <a href="">Consoles</a>
                </li>
                <li>
                  <a href="">Game</a>
                </li>
                <li>
                  <a href="">Smart-phone</a>
                </li>
                <li>
                  <a href="">Toys</a>
                </li>
                <li>
                  <a href="">Uncategorized</a>
                </li>
                <li>
                  <a href="">Video-Game</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mb-5">
            <div class="card w-100">
              <h5 class="fw-bold p-4">Compare</h5>
              <ul class="list-unstyled text-start">
                <div class="small">No products to compare</div>
                <li class="">
                  <a href="">Video-Game</a>
                  <button type="button" class="btn btn-sm-yellow rounded-pill">
                    Compare
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mb-5">
            <img src="./assets/images/banners/shop-sidebar.jpg" alt="" />
          </div>
          <div class="row mb-5">
            <div class="card w-100">
              <h5 class="fw-bold p-4">Product tags</h5>
              <ul class="list-unstyled text-start">
                <li class="text-center">
                  <button type="button" class="btn btn-yellow mb-3">
                    Clothes
                  </button>
                  <button type="button" class="btn btn-yellow mb-3">
                    Watchs
                  </button>
                  <button type="button" class="btn btn-yellow mb-3">
                    Hand bags
                  </button>
                  <button type="button" class="btn btn-yellow mb-3">
                    Laptop
                  </button>
                  <button type="button" class="btn btn-yellow mb-3">
                    Mobile
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-9 ps-5">
          <div class="banner">
            <div class="row">
              <div class="figure">
                <img class="rounded-3" src="./assets/images/banners/shop-banner-1.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="colaps-icons">
            <div class="row my-3">
              <div class="col-lg-12 d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <span>
                    <a data-bs-toggle="collapse" href="#product-item-1" role="button" aria-expanded="false"
                      aria-controls="collapseExample">
                      <i class="fas fa-th"></i>
                    </a>
                  </span>
                  <span>
                    <a data-bs-toggle="collapse" href="#collapseExample-1" role="button" aria-expanded="false"
                      aria-controls="collapseExample">
                      <i class="fas fa-bars"></i>
                    </a>
                  </span>
                  <p class="ms-5 mb-0">Showing 1–15 of 40 result</p>
                </div>
                <div class="dropdown ms-auto">
                  <a class="btn border dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Defolt Sorting
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">Defolt Sorting</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Defolt Popularity</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Sort By Average Rating</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Sort By Lattest</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Sort By Low Price</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Sort By High Price</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="product-items-grid">
            <div class="row">
              <div class="collapse d-flex" id="product-item-1">
                <div class="row">
                  <?php foreach ($products as $key => $value) { ?>
                    <div class="col-4">
                      <div class="card mb-4">
                        <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                          <h6 class="card-title">
                            <a href="" class="text-uppercase">
                              <?php echo $value['name']; ?>
                            </a>
                          </h6>
                          <p class="my-2">
                            <a href="<?php echo BASE_URL; ?>/pages/productdetails.php" class="d-block">Phasellus vel
                              handererit egit
                              Pretium
                            </a>
                          </p>
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
                  <?php } ?>
                  <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="./shop.html">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="./shop2.html">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="./shop3.html">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="./shop2.html" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "../layout/footer.php" ?>