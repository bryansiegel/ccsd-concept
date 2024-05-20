<footer
        class="text-center text-lg-start text-white"
        style="background-color: #55565b;
        width:100%;
        border-bottom: 5px solid #f4b019;

"
>
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="assets/img/ccsd-logo-draft-white.png" alt="">
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none"/>

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <p>
                        <a class="text-white">Bootstrap</a>
                    </p>
                    <p>
                        <a class="text-white">WordPress</a>
                    </p>
                    <p>
                        <a class="text-white">BrandFlow</a>
                    </p>
                    <p>
                        <a class="text-white">Bootstrap Angular</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none"/>

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <p>
                        <a class="text-white">Your Account</a>
                    </p>
                    <p>
                        <a class="text-white">Become an Affiliate</a>
                    </p>
                    <p>
                        <a class="text-white">Shipping Rates</a>
                    </p>
                    <p>
                        <a class="text-white">Help</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none"/>

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <p><i class="fas fa-home mr-3"></i> Las Vegas, Nevada</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <!-- Copyright -->
                    <div class="p-3">
                        © 2024 Copyright:
                        <a class="text-white" href="https://mdbootstrap.com/"
                        >CCSD.net</a
                        >
                    </div>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <!-- Facebook -->
                    <a
                            class="btn btn-outline-light btn-floating m-1"
                            class="text-white"
                            role="button"
                    ><i class="fab fa-facebook-f"></i
                        ></a>

                    <!-- Twitter -->
                    <a
                            class="btn btn-outline-light btn-floating m-1"
                            class="text-white"
                            role="button"
                    ><i class="fab fa-x-twitter"></i
                        ></a>

                    <!-- Google -->
                    <a
                            class="btn btn-outline-light btn-floating m-1"
                            class="text-white"
                            role="button"
                    ><i class="fab fa-youtube"></i
                        ></a>

                    <!-- Instagram -->
                    <a
                            class="btn btn-outline-light btn-floating m-1"
                            class="text-white"
                            role="button"
                    ><i class="fab fa-instagram"></i
                        ></a>
                </div>
                <!-- Grid column -->
            </div>
        </section>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/slideshow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!--    slidshow-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--    Charts-->
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Teachers', 'Students', 'Schools', 'Magnet Schools', 'Private Schools', 'Graduations'],
                datasets: [{
                    label: 'Number of Students',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1,
                    backgroundColor: "rgba(9, 79, 163)",
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>


</footer>