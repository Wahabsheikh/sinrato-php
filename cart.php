<?php include "./layout/header.php"; ?>
</head>

<body>
    <?php include "./layout/menu.php"; ?>

    <section id="cart">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header text-center m-5 text-capitalize ">
                        <h1>
                            cart
                        </h1>
                    </div>
                    <div class="cart-table">
                        <table class="table table-bordered  ">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col"></th>
                                    <th scope="col">image</th>
                                    <th scope="col">products</th>
                                    <th scope="col">price</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>

                                </tr>

                                <tr>
                                    <!-- <th scope="row"></th> -->
                                    <td colspan="6" class="text-end"> <a href="#"
                                            class=" btn btn-yellow btn-yellow-hover rounded-pill  ">Shop Now</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header border-bottom mb-3 text-uppercase">
                        <h3>coupon</h3>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-muted">Enter your coupon code if
                            you have one.
                        </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="coupon code">
                    </div>
                    <div class="mb-3">
                        <a href="#" class=" btn btn-yellow btn-yellow-hover rounded-pill text-uppercase  ">applay
                            coupon</a>
                    </div>
                </div>

                <div class="col-6">

                </div>
            </div>
        </div>

    </section>




    <?php include "./layout/footer.php"; ?>