$(document).ready(function () {



















    $('#topbar').html(`
        <div class="container-fluid ">
            <div class="my-container ">
                    <div class=" row p-2 px-4 d-flex align-items-center">
                        <div class="topbar-left  col-12  col-lg-6 d-flex align-items-center">
                            <p class="py-2 w-100 text-center text-lg-start  topbar-title text-white m-0">
                                <span class="grey">Email:</span> support@roadthemes.com <span class="mx-3 grey">|</span>Free
                                Shipping for all
                                Order of $99</p>
                        </div>
                        <div class="topbar-right col-12 col-lg-6">
                            <div class=" d-flex justify-content-center justify-content-lg-end ">
                                <a href="">My account</a>
                                <span class="mx-3 py-1 grey">|</span>
                                
                                <a href="" class="w"> Wishlist</a>
                                <span class="w mx-3 py-1 grey">|</span>

                                 <a href="" class="w"> My Cart</a>
                                 <span class="w mx-3 py-1 grey">|</span>

                                <a href="">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    `);


    $('#menu-bar').html(`
    <div class="container-fluid">
    <div class="my-container">
        <div class="row  p-4 mt-2 second-topbar d-flex align-content-center  ">
            <div
                class="col-lg-2 col-md-12 align-items-center d-flex  justify-content-md-center justify-content-end">
                <figure>
                    <img src="./assets/images/logo_sinrato (1).png" style="width: 150px; height: 30px;"
                        alt="logo">
                </figure>
            </div>
            <div class="col-lg-7 col-md-12 d-flex justify-content-md-center">
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
                        <div class="   mx-2 d-flex flex-column align-items-start">
                            <span class="badge  bg-custom-yellow  ">0</span>
                            <p><a class="text-decoration-none  " href="" style="  font-size: 13px;"> Wishlist</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-self-center ">
                    <i class="fas fa-cart-plus"></i>                    
                    <div class="  mx-2 d-flex flex-column align-items-start">
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



`);



    $('#navbar').html(`
        <div class="container-fluid d-flex flex-wrap ">
            <nav class="col-12  navbar navbar-expand-lg navbar-expand-md  navbar-light  p-0 ">
                <div class="container ">
                    <button class="btn d-custom-btn rounded-0  dropdown-toggle p-2 " type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Browse Categories
                    </button>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    <div class=" d-hover-menu collapse d-hover-c-btn navbar-collapse  " id="navbarNav">

                        <ul class="navbar-nav primary-navs ">
                            <li class="nav-item primary-nav-items  ">
                                <a class="nav-link primary-nav-link " aria-current="page" href="./index.html">Home</a>
                                <div class="secondary-navs-wrapper">
                                <ul class="custom-card secondary-navs shadow ">
                                    <li class="nav-item secondary-nav-item ">
                                        <a class="nav-link secondary-nav-link " href="#">Home Shop 1</a>
                                    </li>
                                    <li class="nav-item secondary-nav-item">
                                        <a class="nav-link  secondary-nav-link" href="#">Home Shop 2</a>
                                    </li>
                                    <li class="nav-item secondary-nav-item">
                                        <a class="nav-link  secondary-nav-link">Home Shop 3</a>
                                    </li>
                                    <li class="nav-item secondary-nav-item">
                                        <a class="nav-link  secondary-nav-link">Home Shop 4</a>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="nav-item primary-nav-items ">
                                <a class="nav-link primary-nav-link" href="./shop.html">Shop</a>
                                <div class="secondary-navs-wrapper">
                                <div class="secondary-horizontal-card d-flex shadow">
                              <ul class="list-group  ">
                              <li class="list-group-item"><strong>product-layout</strong></li>

                              <li class="list-group-item ">sidebar left</li>
                              <li class="list-group-item ">product category</li>
                              <li class="list-group-item ">simple product</li>
                            </ul>
                            <ul class="list-group ">
                            <li class="list-group-item"><strong>product-page</strong></li> 

                            <li class="list-group-item ">sedebar right</li>
                            <li class="list-group-item ">my account</li>
                            <li class="list-group-item ">group product</li>
                          </ul>
                          <ul class="list-group">
                          <li class="list-group-item" ><strong>product-type</strong></li>

                          <li class="list-group-item ">full width</li>
                          <li class="list-group-item ">wishlist</li>
                          <li class="list-group-item ">variable product</li>
                        </ul>
                        </div>
                                </div>
                            </li>
                            <li class="nav-item primary-nav-items ">
                                <a class="nav-link primary-nav-link" href="./blogs.html/blogs.html">Blog</a>
                                <div class="secondary-navs-wrapper">
                                <div class="secondary-horizontal-card1 d-flex shadow">
                              <ul class="list-group  ">
                              <li class="list-group-item"><strong>product-layout</strong></li>

                              <li class="list-group-item ">sidebar left</li>
                              <li class="list-group-item ">product category</li>
                              <li class="list-group-item ">simple product</li>
                            </ul>
                            <ul class="list-group ">
                            <li class="list-group-item"><strong>product-page</strong></li> 

                            <li class="list-group-item ">sedebar right</li>
                            <li class="list-group-item ">my account</li>
                            <li class="list-group-item ">group product</li>
                          </ul>
                          <ul class="list-group">
                          <li class="list-group-item" ><strong>product-type</strong></li>

                          <li class="list-group-item ">full width</li>
                          <li class="list-group-item ">wishlist</li>
                          <li class="list-group-item ">variable product</li>
                        </ul>
                        </div>
                                </div>
                            </li>
                            <li class="nav-item primary-nav-items ">
                                <a class="nav-link primary-nav-link">Pages</a>
                                <div class="secondary-navs-wrapper">
                                <ul class=" custom-card secondary-navs shadow">
                                    <li class="nav-item secondary-nav-item">
                                        <a class="nav-link secondary-nav-link" href="./page.html/frequently.html">Frequently</a>
                                    </li>
                                    <li class="nav-item secondary-nav-item">
                                        <a class="nav-link secondary-nav-link" href="./page.html/privary.html">Privacy policy</a>
                                    </li>
                                    <li class="nav-item secondary-nav-item">
                                        <a class="nav-link  secondary-nav-link">Page-3</a>
                                    </li>
                                    <li class="nav-item secondary-nav-item">
                                        <a class="nav-link  secondary-nav-link">Page-4</a>
                                    </li>
                                </ul>
                                </div>

                            </li>
                            <li class="nav-item primary-nav-items  ">
                                <a class="nav-link primary-nav-link" href="./about.html">About Us</a>
                            </li>
                            <li class="nav-item primary-nav-items  ">
                                <a class="nav-link primary-nav-link" href="./contact.html">Contact</a>
                            </li>
                        </ul>
                        <div class=" ms-auto  d-lg-block d-md-none ">

                            <span class="fw-bold"> Hotline:1-001-234-5678</span>
                        </div>
                    </div>
              </div>
           </nav>
        </div>
    `);




    $('#contact').html(`
    
    <div class="container-fluid ">
       <div class="my-container">

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
        <div class="col-4 d-flex justify-content-end  ">
            <div class="input-group">
                <input type="text" class="form-control border-0 " placeholder="Enter Your E-mail Address"
                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                <button type="button" class="btn btn-sm-yellow">Subscribe</button>
            </div>
       
        </div>
        
        <div class=" social-icon col-4 d-flex  ">
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

</div>`
    )

});