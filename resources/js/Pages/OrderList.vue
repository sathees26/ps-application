<script setup>
import orderlistnavLayout from "@/Layouts/orderlistnavLayout.vue";

import { ref, onMounted } from "vue";

onMounted(() => {
    setTimeout(appendApp, 100);
    function appendApp() {
        let jqueryminJS = document.getElementById("jquery.min.js");
        if (jqueryminJS != null) {
            jqueryminJS.remove();
        }
        let mainScript = document.createElement("script");
        mainScript.setAttribute("src", "js/jquery.min.js");
        mainScript.setAttribute("id", "jquery.min.js");
        document.body.appendChild(mainScript);
    }
});

defineProps({ categories: Object });
</script>

<template>
    <orderlistnavLayout>
        <body class="product-color">
            <div class="d-flex justify-content-end price-tag1 blink1">
                <a href="image/ps-crackers.pdf" download
                    ><img src="image/logo/price list1.png" alt=""
                /></a>
            </div>

            <div style="display: flex; position: sticky; top: 0; z-index: 998">
                <div
                    class="ordertext container-fluied justify-content-evenly d-flex align-items-center Order2"
                    style="display: block"
                >
                    <div class="hh5 fw-bold">Total Item :<span> 0 </span></div>
                </div>
            </div>

            <section class="mt-5">
                <!-- <div
                    class="justify-content-center yellow d-flex align-items-center"
                >
                    <h1>Order List</h1>
                </div> -->
                <div
                    class="justify-content-evenly yellow d-flex align-items-center Order"
                >
                    <div class="container d-flex justify-content-evenly">
                        <div class="hh5 fw-bold">Original Price:</div>
                        <div class="hh5 fw-bold">Discount:</div>
                        <div class="hh5 fw-bold">Total Price:</div>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="d-flex justify-content-evenly">
                        <h4 class="fw-bold fss-4">Product Name</h4>
                        <h4 class="fw-bold fss-4">Actual Price</h4>
                        <h4 class="fw-bold fss-4">80% Offer</h4>
                        <h4 class="fw-bold fss-4">Price</h4>
                        <h4 class="fw-bold fss-4">Quantity</h4>
                    </div>

                    <section>
                        <div class="container">
                            <div
                                class="mt-1 accordion-contianer"
                                v-for="category in categories"
                            >
                                <button class="accordion fw-bold fs-5">
                                    {{ category.category }}
                                </button>
                                <div>
                                    <div
                                        class="panel d-flex justify-content-around align-items-center"
                                        v-for="product in category.products"
                                    >
                                        <!-- <div
                                            class="d-flex align-items-center wrapper mt-4"
                                        >
                                            <div class="fss-5">
                                                <img
                                                    v-bind:src="
                                                        'storage/' +
                                                        product.image
                                                    "
                                                    height="70"
                                                />
                                            </div>
                                            &nbsp;
                                            <div class="fss-5">
                                                {{ product.name }}
                                            </div>
                                        </div>
                                        <div class="fss-5">
                                            {{ product.price }}
                                        </div>
                                        <div class="fss-5">
                                            <span class="strike actual_price"
                                                >₹ 320</span
                                            >
                                        </div>
                                        <div class="fss-5 text-success">
                                            ₹ 80
                                        </div>
                                        <div class="addbtn">
                                            <button
                                                class="minusBtn qty"
                                                type="button"
                                                value="-"
                                            >
                                                -</button
                                            >&nbsp;
                                            <button
                                                class="mainBtn qty"
                                                value="0"
                                            >
                                                ADD</button
                                            >&nbsp;
                                            <button
                                                class="plusBtn qty"
                                                type="button"
                                                value="+"
                                            >
                                                +
                                            </button>
                                        </div>
                                        <div class="fss-5">total</div> -->

                                        <div class="cards container">
                                            <div
                                                class="d-grid justify-content-around align-items-center row grid-template-column"
                                                style="
                                                    grid-template-columns: 4fr 1fr;
                                                "
                                            >
                                                <div
                                                    class="justify-content-around align-items-center container-product col-lg-9 col-md-6 card2"
                                                >
                                                    <div
                                                        class="fss-5 mt-4 text-danger fw-bold"
                                                    >
                                                        {{ product.name }}
                                                    </div>
                                                    <div class="fss-5">
                                                        {{ product.price }}
                                                    </div>
                                                    <div class="fss-5">
                                                        <span
                                                            class="strike actual_price"
                                                            >₹ 320</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="fss-5 text-success price fw-bold"
                                                    >
                                                        ₹ 80
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div>
                                                        <img
                                                            v-bind:src="
                                                                'storage/' +
                                                                product.image
                                                            "
                                                            class="imageproduct"
                                                        />
                                                    </div>
                                                    <div class="addbtn">
                                                        <button
                                                            class="minusBtn qty"
                                                            type="button"
                                                            value="-"
                                                        >
                                                            -</button
                                                        >&nbsp;
                                                        <button
                                                            class="mainBtn qty"
                                                            value="0"
                                                        >
                                                            ADD</button
                                                        >&nbsp;
                                                        <button
                                                            class="plusBtn qty"
                                                            type="button"
                                                            value="+"
                                                        >
                                                            +
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- <section>
                        <div class="cards">
                            <div
                                class="d-grid justify-content-around align-items-center row"
                                style="grid-template-columns: 4fr 1fr"
                            >
                                <div
                                    class="justify-content-around align-items-center container-product col-lg-9 col-md-6 card2"
                                >
                                    <div class="fss-5 mt-4 text-danger fw-bold">
                                        7 cm Electric Sparklers
                                    </div>
                                    <div class="fss-5">₹ 400.00</div>
                                    <div class="fss-5">
                                        <span class="strike actual_price"
                                            >₹ 320</span
                                        >
                                    </div>
                                    <div
                                        class="fss-5 text-success price fw-bold"
                                    >
                                        ₹ 80
                                    </div>
                                </div>
                                <div class="purchase-info col-lg-3 col-md-6">
                                    <div>
                                        <img
                                            src="image/about/about-1.png"
                                            alt=""
                                            class="imageproduct"
                                        />
                                    </div>
                                    <div class="addbtn">
                                        <button
                                            class="minusBtn qty"
                                            type="button"
                                            value="-"
                                        >
                                            -</button
                                        >&nbsp;
                                        <button class="mainBtn qty" value="0">
                                            ADD</button
                                        >&nbsp;
                                        <button
                                            class="plusBtn qty"
                                            type="button"
                                            value="+"
                                        >
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->

                    <div class="row g-4">
                        <div class="col-xl-6">
                            <div id="contact" class="container">
                                <div class="row" style="margin-top: 60px"></div>

                                <div class="row" style="margin-top: 60px">
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
                                    <div
                                        class="form-group"
                                        style="margin-top: 30px"
                                    >
                                        <textarea
                                            class="form-control"
                                            id=""
                                            rows="5"
                                            placeholder="Message"
                                            required
                                        ></textarea>
                                    </div>
                                    <div class="text-center mt-3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6" style="margin-top: 50px">
                            <div class="col-xl-8 mt-5">
                                <div class="w-100 form-group">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            Net Total :
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="net_total pr-3"
                                                >Rs.0</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 form-group">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            Discount Total :
                                        </div>
                                        <div class="col-4 text-right">
                                            <span
                                                class="discount_total pr-3"
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 form-group">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            Sub Total :
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="sub_total pr-3"></span>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="w-100 form-group minimum_order_amount_cover"
                                >
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            Min.Order Amount :
                                        </div>
                                        <div class="col-4 text-right">
                                            <span
                                                class="minimum_order_amount pr-3"
                                                >Rs.4,000.00</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="w-100 form-group packing_charges_cover"
                                >
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            Packing Charges :
                                            <span class="packing_charges"
                                                >5%</span
                                            >
                                        </div>
                                        <div class="col-4 text-right">
                                            <span
                                                class="packing_charges_value pr-3"
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 form-group">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            Round OFF :
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="round_off pr-3"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 form-group">
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            Overall Total :
                                        </div>
                                        <div class="col-4 text-right">
                                            <span
                                                class="overall_total pr-3"
                                            ></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 text-center">
                                    <button class="btn-2">
                                        <span id="submit" class="text"
                                            >Submit</span
                                        >
                                        <i
                                            class="fa fa-check icon"
                                            style="background-color: #63459b"
                                        ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
    </orderlistnavLayout>
</template>
