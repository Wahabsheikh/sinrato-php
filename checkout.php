<?php include "./layout/header.php"; ?>
</head>

<body>
    <?php include "./layout/menu.php"; ?>

    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_header text-center p-5 text-uppercase">
                        <h1>checkout</h1>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form_header">
                        <h3>BILLING DETAILS</h3>

                    </div>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="first name" class="form-label">first name</label>
                            <input type="name" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="last name" class="form-label">last name</label>
                            <input type="name" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="company name" class="form-label">company name (optional)</label>
                            <input type="name" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <select class=" form-select form-select-md" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-md-12">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </form>
                </div>
                <div class="col-6"></div>
            </div>
        </div>



    </section>




    <?php include "./layout/footer.php"; ?>