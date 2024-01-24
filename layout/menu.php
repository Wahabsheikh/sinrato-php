<section class="top-bar">
    <div class="container-fluid ">
        <div class="my-container ">
            <div class=" row p-2 px-4 d-flex align-items-center">
                <div class="topbar-left col-12 col-lg-6 d-flex align-items-center">
                    <p class="py-2 w-100 text-center text-lg-start  topbar-title text-white m-0">
                        <span class="grey">Email:</span> support@roadthemes.com <span class="mx-3 grey">|</span>Free
                        Shipping for all
                        Order of $99
                    </p>
                </div>
                <div class="topbar-right col-12 col-lg-6">
                    <div class=" d-flex justify-content-center justify-content-lg-end ">
                        <a href="<?php echo BASE_URL; ?>/pages/myaccount.php">My account</a>
                        <span class="mx-3 py-1 grey">|</span>
                        <a href="">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menu-bar">
    <div class="container-fluid">
        <div class="my-container">
            <div class="row  p-4 mt-2 second-topbar d-flex align-content-center  ">
                <div
                    class="col-lg-2 col-md-12 align-items-center d-flex  justify-content-md-center justify-content-end">
                    <figure>
                        <img src="<?php echo BASE_URL ?>/assets/images/logo_sinrato (1).png"
                            style="width: 180px; height: 40px;" alt="logo">
                    </figure>
                </div>
                <div class="col-lg-7 col-md-12 d-flex justify-content-md-center justify-content-lg-start">
                    <div class="custom-group-btn btn-group border-0" role="group"
                        aria-label="Button group with nested dropdown">
                        <div class="panel btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="left btn  dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                All Categories
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div> <input type="text" class="center  form-controll" placeholder="Search Products">
                        <button type="button" class=" btn btn-yellow  ">Search</button>
                    </div>
                </div>
                <div class="col-lg-3  d-flex d-md-none d-lg-block justify-content-end">
                    <div class="row  d-flex  t-hover">
                        <div class="col-6 d-flex align-self-center ">
                            <i class="fa-regular fa-heart fa-2x"></i>
                            <div class="  mx-2 d-flex flex-column align-items-start">
                                <span class="badge  bg-custom-yellow  ">0</span>
                                <p><a class="text-decoration-none " href="" style="  font-size: 13px;"> Wishlist</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-self-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-cart3 d-flex align-self-start" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div class="mx-2 d-flex flex-column align-items-start">
                                <span class="badge rounded-pill bg-custom-yellow ">0</span>
                                <p><a class="text-decoration-none " href="" style="  font-size: 13px;"> My Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<nav class="c-navbar navbar navbar-expand-lg navbar-light thrd-nav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="<?php echo BASE_URL; ?>/pages/shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="<?php echo BASE_URL; ?>/pages/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="<?php echo BASE_URL; ?>/pages/contact.php">Contact</a>
                </li>

            </ul>
            <form class="d-flex">
                <span class="fw-bold"> Hotline:1-001-234-5678</span>

            </form>
        </div>
    </div>
</nav>