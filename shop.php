<?php include "./layout/header.php";


$data = $products;



//Filter Category Products
if (isset($_GET['category_id'])) {

  $filterproducts = [];

  $category_id = $_GET['category_id'];
  foreach ($data as $key => $value) {
    if ($value['category_id'] == $category_id) {

      array_push($filterproducts, $value);
    }
  }


  $data = $filterproducts;

}






?>



<style>
  .category .active {
    color: yellow !important;
  }
</style>


</head>

<body>
  <?php include "./layout/menu.php"; ?>

  <section class="category content-aria">
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-3 ps-5">
          <div class="row mb-5">
            <div class="card">
              <h5 class="fw-bold p-4">Categories</h5>
              <ul class="list-unstyled">
                <?php foreach ($categories as $key => $value) {
                  $class = "";
                  if (isset($_GET['category_id']) && $_GET['category_id'] == $value['id']) {
                    $class = "active";
                  }
                  ?>
                  <li>
                    <a class="<?php echo $class; ?>"
                      href="<?php echo BASE_URL . '/shop.php?category_id=' . $value['id']; ?>">
                      <?php echo $value['title']; ?>
                    </a>
                  </li>

                  <?php
                } ?>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-9 ps-5">
          <div class="banner">
            <div class="row">
              <div class="figure">
                <img class="rounded-3" src="/assets/images/banners/shop-banner-1.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="product-items-grid">
            <div class="row">
              <div class="collapse d-flex" id="product-item-1">
                <div class="row">
                  <?php foreach ($data as $key => $value) { ?>
                    <div class="col-4">
                      <div class="card mb-4">
                        <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                          <h6 class="card-title">
                            <a href="<?php echo BASE_URL . '/productdetails.php?id=' . $value['id']; ?>"
                              class="text-uppercase">
                              <?php echo $value['name']; ?>
                            </a>
                          </h6>
                          <p class="my-2">
                            <a href="<?php echo BASE_URL . '/productdetails.php?id=' . $value['id']; ?>"
                              class="d-block">Phasellus vel
                              handererit egit
                              Pretium
                            </a>
                          </p>
                          <span class="h5">$55.00</span>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "./layout/footer.php" ?>