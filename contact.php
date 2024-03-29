<?php include "./layout/header.php"; ?>
</head>

<body>
    <?php include "./layout/menu.php"; ?>
    <section class="contact-us">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="p-5 text-center fw-bold">
                            Contact
                        </h1>
                    </div>
                    <div class="col-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.35892370409!2d-0.13614278406001018!3d51.50663081858014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d0d1dc04db%3A0x9a9210be2dfb7584!2sPall+Mall%2C+St.+James's%2C+London+SW1Y+5ER%2C+V%C6%B0%C6%A1ng+Qu%E1%BB%91c+Anh!5e0!3m2!1svi!2s!4v1529549164060"
                            width="600" height="450" frameborder="0"
                            style="border: 0px; pointer-events: none; width: 100%; height: 350px;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-form mt-5">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-3 ">
                        <div class="heading">
                            <h3>
                                <span>
                                    Contact-Us
                                </span>
                            </h3>
                            <div class="h-line">
                            </div>
                        </div>
                        <div class="text-list m-0">
                            <ul class="list-group list-group-flush">
                                <li class="pt-4 list-group-item p-0 ">
                                    <div class="d-flex ">
                                        <i class="fas fa-lg fa-home pe-3"></i>
                                        <span class="h5">Address</span>
                                    </div>
                                    <p>
                                        <small class="text-muted">
                                            123 Main Street, Anytown, CA 12345 <small>-</small> USA
                                        </small>
                                    </p>
                                </li>
                                <li class="pt-4 list-group-item p-0">
                                    <div class="d-flex">
                                        <i class="fas fa-lg fa-envelope-square pe-3 "></i> <br>
                                        <span class="h5">Phone </span>
                                    </div>
                                    <p>
                                        <small class="text-muted">
                                            Mobile: (08) 123 456 789
                                            <br>
                                            Hotline: 1009 678 456
                                        </small>
                                    </p>
                                </li>
                                <li class="pt-4 list-group-item p-0">
                                    <div class="d-flex">
                                        <i class=" fas fa-lg fa-phone-alt pe-3 "></i>
                                        <br>
                                        <span class="h5">
                                            E-Mail
                                        </span>
                                    </div>
                                    <p>
                                        <small class="text-muted">
                                            yourmail@domain.com
                                            <br>
                                            support@roadthemes.com
                                        </small>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-9 ">
                        <h3>Tell Us Your Message</h3>
                        <div class="form">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Your Name(required) </label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Your Email(required) </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Subject </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="butn">
                                <button type="submit" class="btn c-pill-btn rounded-pill">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact"></section>
    <?php include "./layout/footer.php"; ?>