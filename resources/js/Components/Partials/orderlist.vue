<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <!-- <div class="loader-bg">
        <div class="loader"></div>
    </div> -->

    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-facebook-f text-white"></i>
            <i class="fa-brands fa-instagram text-white"></i>
        </div>
        <div class="other-links">
            <Link href="login">
                <button id="btn-signup" class="mr-1">Login</button></Link
            >
            <Link href="signup"> <button id="btn-signup">Sign up</button></Link>
            <i class="fa-solid fa-cart-shopping text-white"></i>
        </div>
    </div>
    <!-- top navbar -->

    <nav class="navbar navbar-1 navbar-expand-lg" id="navbar-orderlist">
        <div class="container-fluid">
            <Link class="navbar-brand" style="margin-right: 0px" href="/">
                <img
                    src="image/logo/logo-3.png"
                    class="logo-h"
                    alt=""
                    width="180"
                />
            </Link>
            <Link class="navbar-brand" href="/">
                <img src="image/logo/logo-e3.png" class="logo-e" alt="" />
            </Link>
            <!-- <h1 class="ps-name">Pandi Selvi <span>Traders</span> </h1> -->

            <button
                class="navbar-toggler container-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                onclick="myFunction(this)"
            >
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarSupportedContent"
                style="width: 0"
            >
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-links-1">
                    <li class="nav-item">
                        <Link class="nav-link" href="/">Home</Link>
                    </li>

                    <li class="nav-item">
                        <Link class="nav-link" href="/about-us">About us</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/order-list"
                            >Order List</Link
                        >
                    </li>
                    <!-- <li class="nav-item">
                        <Link
                            class="nav-link"
                            href="/products"
                            >Products
                        </Link>
                    </li>

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="/"
                            id="navbarDropdown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Collection
                        </a>
                        <div
                            class="dropdown-menu cl"
                            aria-labelledby="navbarDropdown"
                        >
                            <ul>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        style="color: #63459b"
                                        href="flowerpot-3"
                                        >Flower Pots</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="flowerpot-3"
                                        >Flower Pots Small</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="flowerpot-3"
                                        >Flower Pots Big</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="flowerpot-3"
                                        >Flower Pots Special</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="flowerpot-3"
                                        >Super Deluxe (5 Pcs)</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="flowerpot-3"
                                        >Colour Koti Red&green(5 Pcs)</a
                                    >
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        style="color: #63459b"
                                        href="#"
                                        >Kids crackers</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >1 1/2 Twinkling Star</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >4 '' Twinkling Star</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Magic Pops</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Ultra Candle</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Zee Boom Baa</a
                                    >
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        style="color: #63459b"
                                        href="#"
                                        >Sound Crackers</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Auto Bomb</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Hydro Bomb</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Classic bomb</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Digital Bomb</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >ds Bomb</a
                                    >
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        style="color: #63459b"
                                        href="#"
                                        >Sparklers</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >7cm Colors
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >10cm red</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >15cm elctic</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >30cm green</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >50cm green</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="/"
                            id="navbarDropdown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Fancy
                        </a>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <ul>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        style="color: #63459b"
                                        href="product"
                                        >Fancy
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Chotta Fancy
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >2 '' Fancy (3 Pcs)</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >2 '' Fancy (single )</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >3 '' Fancy (single )</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >5 '' Fancy (single )</a
                                    >
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        style="color: #63459b"
                                        href="#"
                                        >Multi-Fancy</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >12 Shot</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >25 Shot
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >30 Shot</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >60 Shot</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >120 Shot</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="nav-item dropdown">
                        <Link
                            class="nav-link dropdown-toggle"
                            href="/"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Account
                        </Link>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <ul>
                                <li>
                                    <Link class="dropdown-item" href="#"
                                        >Account</Link
                                    >
                                </li>
                                <li>
                                    <Link class="dropdown-item" href="/address"
                                        >Address</Link
                                    >
                                </li>
                                <li>
                                    <Link class="dropdown-item" href="order"
                                        >Orders</Link
                                    >
                                </li>
                                <li>
                                    <Link
                                        class="dropdown-item"
                                        href="/account-details"
                                        >Account Details</Link
                                    >
                                </li>
                                <li>
                                    <Link
                                        class="dropdown-item"
                                        href="change-password"
                                        >Change Password</Link
                                    >
                                </li>
                                <li>
                                    <Link class="dropdown-item" href="/"
                                        >Log Out</Link
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <Link class="nav-link >" href="/contact-us"
                            >Contact us</Link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
