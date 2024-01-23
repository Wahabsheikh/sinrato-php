<footer id="footer">
<div class="container-fluid d-flex flex-wrap">
<div class="my-container">
    <div class="row ">
        <div class="col-3 d-flex justify-content-evenly">
            <div class="p-5">
                <div>
                    <figure class=" ms-3">
                        <img src="./assets/images/logo_sinrato (1).png" class="card-img-top" alt="..."
                            style="width: 200px;">
                    </figure>
                </div>

                <div class="card-body">
                    <p class="small text-muted">We are a team of designers and developers that
                        create high quality
                        WordPress, Magento,
                        Prestashop, Opencart themes.</p>
                    <h5 class="card-title">Payment:</h5>
                    <img src="./assets/images/payment-icon.png" alt="" style="width: 200px;" >
                    </div>
            </div>
        </div>
        <div class=" information col-2 mt-5">
            <h5>Information</h5>
            <ul class="list-group">
                <a href="#" class=" list-group-item-action"> Home Page</a>
                <a href="#" class=" list-group-item-action">Cart </a>
                <a href="#" class=" list-group-item-action">About Us</a>
                <a href="#" class=" list-group-item-action">Contact </a>
                <a href="#" class=" list-group-item-action">Wishlist </a>
                <a href="#" class=" list-group-item-action"> Privacy Policy</a>
                <a href="#" class=" list-group-item-action">Sample Page </a>
            </ul>
        </div>
        <div class="col-3 mt-5">
            <h5>
                Contact Us
            </h5>
            <p>Address: <span class="text-muted"> 4710-4890 Breckinridge St,Fayetteville, NC 28311</span>
            </p>

            <p>Email: <span class="text-muted">support@roadthemes.com</span></p>
            <p>Cell Us: <span class="h4">1-1001-234-5678</span> </p>
        </div>
        <div class="col-4 mt-5 ">
            <h5>Twiter Widget</h5>
            <div>
            <iframe
            src="https://twitter.com/LeongWaiKitCNA"
            width="200" height="250" frameborder="0"
            style="border: 0px; pointer-events: none; width: 100%; height: 250px;"></iframe>
            </div>
        </div>
    </div>
</div>
</div>
</footer>



<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/jsbs/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/1d478d290c.js" crossorigin="anonymous"></script>
<script src="./assets/js/plugins.js"></script>
<script src="./assets//components/data.js"></script>
<script src="./assets/js/main.js"></script>



<script>

    $(document).ready(function () {


        // let ofer = `
        // <div class="items d-flex ">
        //                 <img src="./assets/images/icons/policy2.png" alt="icon">

        //                 <div class="card-body ">
        //                     <h6 class="card-title">Free Shipping</h6>
        //                     <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
        //                     </span>
        //                 </div>
        //             </div>
        //             <div class="v-line"> </div>

        //             <div class="items d-flex ">
        //                 <img src="./assets/images/icons/policy3.png" alt="icon">

        //                 <div class="card-body ">
        //                     <h6 class="card-title">Free Shipping</h6>
        //                     <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
        //                     </span>
        //                 </div>
        //             </div>
        //             <div class="v-line"> </div>

        //             <div class="items d-flex ">
        //                 <img src="./assets/images/icons/policy4.png" alt="icon">

        //                 <div class="card-body ">
        //                     <h6 class="card-title">Free Shipping</h6>
        //                     <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
        //                     </span>
        //                 </div>
        //             </div>
        //             <div class="v-line"> </div>

        //             <div class="items d-flex ">
        //                 <img src="./assets/images/icons/policy5.png" alt="icon">

        //                 <div class="card-body ">
        //                     <h6 class="card-title">Free Shipping</h6>
        //                     <span class="card-text"> <small class="muted"> Free shipping on all US order </small>
        //                     </span>
        //                 </div>
        //             </div>
        // `;


        //     let product = `
        //     <div class="card ">
        //         <img src="" alt="...">
        //         <div class="card-body ">
        //             <h6 class="card-title  "><a href="" class="text-uppercase">Consoles</a></h6>
        //             <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
        //                     Pretium </a></p>
        //             <div class="stars-rating">
        //                 <ul class="stars list-unstyled d-flex mt-">
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i> </li>
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i></li>
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i>             </li>
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i>
        //                     </li>
        //                     <li class="star me-3">
        //                     <i class="fas fa-sm fa-star"></i>
        //                 </li>
        //                 <span><a href="">(1 Reviews)</a></span>
        //             </ul> </div>
        //         <span class="h5">$55.00</span>
        //         </div>
        //     </div>
        // `;

        //     $('.new-product .item').append(product);
        //     $('.content-aria .product-items-grid ').append(product);
        // products.forEach((element, index) => {
        //     if (index <= 100) {
        //         $('.new-product .item').append(`
        //         <div class="card ">
        //         <img src="${element.image}" alt="...">
        //         <div class="card-body ">
        //             <h6 class="card-title  "><a href="" class="text-uppercase">${element.name}</a></h6>
        //             <p class="my-2"><a href="" class="d-block ">Phasellus vel handererit egit
        //                     Pretium </a></p>
        //             <div class="stars-rating">
        //                 <ul class="stars list-unstyled d-flex mt-">
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i> </li>
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i></li>
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i>             </li>
        //                     <li class="star">
        //                         <i class="fas fa-sm fa-star"></i>
        //                     </li>
        //                     <li class="star me-3">
        //                     <i class="fas fa-sm fa-star"></i>
        //                 </li>
        //                 <span><a href="">(${element.count} Reviews)</a></span>
        //             </ul> </div>
        //         <span class="h5">$${element.price}.00</span>
        //         </div>
        //     </div>
                  
        //         `);
        //     }
        // });

        // categories.forEach((element, index) => {
        //     if (index <= 100) {
        //         $('.home-categories').append(`
        //             <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6  mb-4">
        //                 <div class="py-3 card d-flex flex-row align-self-center ">
        //                     <div class="card-body ">
        //                         <h6 class="card-title">${element.name}</h6>
        //                         <p class="card-text">${element.count} Products</p>
        //                         <a href="#">+ Shop Now</a>
        //                     </div>
        //                     <figure class="figure">
        //                         <div class="single-image-wrapper">
        //                             <img src="${element.image}" alt="product-image"
        //                                 style="width: 100px; height: 100px;">
        //                         </div>
        //                     </figure>
        //                 </div>
        //             </div>
                  
        //         `);
        //     }
        // });


    });    
</script>
</body>

</html>