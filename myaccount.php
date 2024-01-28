<?php include "./layout/header.php"; ?>
</head>

<body>
    <?php include "./layout/menu.php"; ?>
    <section class="contact-form mt-5">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6 ">
                        <div class="heading">
                            <h3>
                                <span>
                                    login
                                </span>
                            </h3>
                            <div class="h-line">
                            </div>
                        </div>
                        <div class="form">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">username or email
                                    address**</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">pasword </label>
                                <input type="pasword" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>

                            <div class="butn">
                                <button type="submit" class="btn c-pill-btn rounded-pill">
                                    login
                                </button>
                            </div>
                            <small>lost your pasword?</small>

                        </div>
                    </div>
                    <div class="col-6 ">
                        <h3>rigister</h3>
                        <div class="form">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">email address**</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3 inform_messages">
                                <p>
                                    <small>Lorem ipsum dolor sit amet.</small>

                                </p>
                                <p>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur
                                        blanditiis
                                        iste repudiandae!</small>
                                </p>

                            </div>
                            <div class="butn">

                                <button type="submit" class="btn c-pill-btn rounded-pill">
                                    rigister
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include "./layout/footer.php"; ?>