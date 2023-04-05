<script setup>
import HomeLayout from "@/Layouts/HomeLayout.vue";
</script>

<template>
    <HomeLayout>
        <!-- contact -->
        <div class="container" id="contact">
            <h1 class="text-center">CONTACT US</h1>
            <div class="row" style="margin-top: 50px">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-phone"> Phone</i>
                        <h6 style="color: #63459b">+00000000000000000</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-envelope"> Email</i>
                        <h6 style="color: #63459b">example@gmail.com</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-location-dot"> Address</i>
                        <h6 style="color: #63459b">PS crackers</h6>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px">
                <div class="col-md-4 py-3 py-md-0">
                    <input
                        type="text"
                        class="form-control form-control"
                        placeholder="Name"
                        required
                    />
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input
                        type="text"
                        class="form-control form-control"
                        placeholder="Email"
                        required
                    />
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input
                        type="number"
                        class="form-control form-control"
                        placeholder="Phone"
                        required
                    />
                </div>
                <div class="form-group" style="margin-top: 30px">
                    <textarea
                        class="form-control"
                        id=""
                        rows="5"
                        placeholder="Message"
                        required
                    ></textarea>
                </div>
                <div class="text-center mt-3">
                    <button class="btn-2">
                        <span id="submit" class="text">Submit</span>
                        <i
                            class="fa fa-check icon"
                            style="background-color: #63459b"
                        ></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- contact -->

        <!-- map -->
        <div class="container" id="contact">
            <h1 class="text-center"></h1>

            <div class="row" style="margin-top: 30px">
                <div class="form-group" style="margin-top: 30px">
                    <iframe
                        class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1499.0237477642488!2d80.25825064307512!3d12.972704959543144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1669961429635!5m2!1sen!2sin"
                        frameborder="0"
                        style="min-height: 450px; border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        aria-hidden="false"
                        tabindex="0"
                    >
                    </iframe>
                </div>
            </div>
        </div>

        <!-- map end-->

        <section
            class="wrapper container justify-content-around mt-5"
            style="background-color: #63459b1c; height: 10rem"
        >
            <div class="content">
                <header>
                    <h2 class="heading" style="color: #7156a5">
                        Subscribe to our <br />newsletter and stay updated
                    </h2>
                </header>
                <section></section>
                <footer class="wrapper-1">
                    <input
                        type="email"
                        class="rounded-1"
                        placeholder="Enter your email"
                    />
                    <button class="rounded-1">Subscribe</button>
                </footer>
            </div>
        </section>
    </HomeLayout>
</template>
