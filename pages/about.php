<?php include "../data/ouraboutservices.php"; ?>
<?php include "../data/ouraboutbannercontent.php"; ?>
<?php include "../data/ouraboutpolicy.php"; ?>


<?php include "../layout/header.php"; ?>
</head>

<body>

    <?php include "../layout/menu.php"; ?>


    <section class="about-us">
        <div class="container">
            <div class="row">

                <div class="col-12 my-5">
                    <h1 class="text-center m-3 fw-bold">About Us</h1>
                </div>
                <?php foreach ($our_about_content as $key => $value) { ?>
                    <div class="col-12 mb-5">
                        <figure>
                            <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="">
                        </figure>
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-5">
                        <h1 class="text-center w-75">
                            <?php echo $value['title']; ?>
                        </h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center mb-5">
                        <p class="small text-center text-muted w-75">

                            <?php echo $value['description']; ?>
                        </p>
                    </div>
                    <div class="col-12 d-flex justify-content-center  mb-5">

                        <figure>
                            <img src="<?php echo BASE_URL . '/' . $value['sigImage']; ?>" alt="">
                        </figure>

                    </div>
                <?php } ?>

            </div>


        </div>
        <div class="container-fluid mb-5">
            <div class="row  d-flex align-items-center" style="height: 20rem;">
                <div class="col-12 position-absolute">
                    <figure>
                        <img class="about-services-background" src="../assets/images/banners/about-us-policy-bg.jpg"
                            alt="">
                    </figure>
                </div>
                <?php foreach ($our_about_services as $key => $value) { ?>
                    <div class="col-4 text-center" style="z-index: 1;">
                        <figure>
                            <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" alt="">
                        </figure>
                        <h6>
                            <?php echo $value['title']; ?>
                        </h6>
                        <p>
                            <?php echo $value['description']; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                <?php foreach ($our_about_policy as $key => $value) { ?>

                    <div class="col-4 text-start">
                        <figure>
                            <img src="<?php echo BASE_URL . '/' . $value['image']; ?>" class="img-fluid" alt="">
                        </figure>
                        <h6 class=" fw-bold">
                            <?php echo $value['title']; ?>
                        </h6>
                        <p class="small text-muted">
                            <?php echo $value['description']; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 text-start">
                    <h4>
                        What can we do for you ?
                    </h4>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Nam liber tempor cum soluta nobis ?

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet
                                    cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel
                                    nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. A nullam
                                    ut, tempus nulla. Rutrum orci sit commodo vivamus quam adipiscing, ullamcorper magna
                                    donec integer eget mauris quisque.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Typi non habent claritatem insitam est usus legentis ?

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet
                                    cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel
                                    nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. A nullam
                                    ut, tempus nulla. Rutrum orci sit commodo vivamus quam adipiscing, ullamcorper magna
                                    donec integer eget mauris quisque.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Typi non habent claritatem insitam est usus legentis ?

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet
                                    cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel
                                    nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. A nullam
                                    ut, tempus nulla. Rutrum orci sit commodo vivamus quam adipiscing, ullamcorper magna
                                    donec integer eget mauris quisque.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact"></section>
    <?php include "../layout/footer.php"; ?>