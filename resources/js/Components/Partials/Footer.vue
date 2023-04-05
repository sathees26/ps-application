<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <footer
        id="footer"
        style="margin-top: 50px; font: size 18px"
        class="min-height-400"
    >
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-3 col-md-6 footer-content">
                        <h2>Ps Crackers</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Delectus, hic?
                        </p>
                        <p>
                            *****<br />
                            ***** <br />
                            Sivakasi <br />
                        </p>
                        <strong
                            ><i class="fas fa-phone"></i> Phone:
                            <strong>+000000000000000</strong></strong
                        ><br />
                        <strong
                            ><i class="fa-solid fa-envelope"></i> Email:
                            <strong>example@gmail.com</strong></strong
                        >
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h2>Menu</h2>
                        <ul>
                            <li>
                                <Link href="/" class="text-decoration-none"
                                    >Home</Link
                                >
                            </li>
                            <li>
                                <Link
                                    href="/about-us"
                                    class="text-decoration-none"
                                    >About</Link
                                >
                            </li>
                            <li>
                                <Link
                                    href="/products"
                                    class="text-decoration-none"
                                    >Product</Link
                                >
                            </li>
                            <li>
                                <Link
                                    href="/contact-us"
                                    class="text-decoration-none"
                                    >Contact</Link
                                >
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h2>Our Social Network</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Exercitationem, ad?
                        </p>
                        <div class="socail-links mt-3">
                            <!-- <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a> -->
                            <a href="#" class="twiiter"
                                ><i class="fa-brands fa-facebook-f"></i
                            ></a>
                            <!-- <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a> -->
                            <a href="#" class="twiiter"
                                ><i class="fa-brands fa-instagram"></i
                            ></a>
                            <!-- <a href = "#"><i class = "fab fa-whatsapp"></i></a> -->

                            <!-- <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
</template>
