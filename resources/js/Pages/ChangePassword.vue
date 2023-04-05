<script setup>
import HomeLayout from "@/Layouts/HomeLayout.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <HomeLayout>
        <div class="container mt-5" style="margin-bottom: 200px">
            <div class="row">
                <div class="col col-lg-4">
                    <ul class="nav-item text-dark">
                        <li class="nav-link nav-link-p">
                            <Link
                                class="link-dark text-decoration-none"
                                style="font-size: 1.2rem"
                                href="/address"
                                ><i
                                    class="fa-solid fa-house"
                                    style="color: #63459b"
                                >
                                    &nbsp; </i
                                >Address</Link
                            >
                        </li>
                        <li class="nav-link nav-link-p">
                            <Link
                                class="link-dark text-decoration-none"
                                style="font-size: 1.2rem"
                                href="/order"
                                ><i
                                    class="fa-solid fa-cart-shopping"
                                    style="color: #63459b"
                                >
                                    &nbsp; </i
                                >Orders</Link
                            >
                        </li>
                        <li class="nav-link nav-link-p">
                            <Link
                                class="link-dark text-decoration-none"
                                style="font-size: 1.2rem"
                                href="/account-details"
                                ><i
                                    class="fa-solid fa-user"
                                    style="color: #63459b"
                                >
                                    &nbsp; </i
                                >Account Details</Link
                            >
                        </li>
                        <li class="nav-link nav-link-p">
                            <Link
                                class="link-dark text-decoration-none"
                                style="font-size: 1.2rem"
                                href="/change-password"
                                ><i
                                    class="fa-solid fa-gear"
                                    style="color: #63459b"
                                >
                                    &nbsp; </i
                                >Change Password</Link
                            >
                        </li>
                        <li class="nav-link nav-link-p">
                            <Link
                                class="link-dark text-decoration-none"
                                style="font-size: 1.2rem"
                                href="/"
                                ><i
                                    class="fa-solid fa-right-from-bracket"
                                    style="color: #63459b"
                                >
                                    &nbsp; </i
                                >Logout</Link
                            >
                        </li>
                    </ul>
                </div>
                <div class="col-lg mb-6">
                    <h1>Change password</h1>
                    <div class="col-lg-5 mt-5">
                        <h6>Old password</h6>
                        <input
                            type="password"
                            id="inputPassword6"
                            class="form-control"
                            placeholder=""
                            aria-describedby="passwordHelpInline"
                        />
                    </div>
                    <div class="col-lg-5 mt-3">
                        <h6>New password</h6>
                        <input
                            type="password"
                            id="inputPassword6"
                            class="form-control"
                            placeholder=""
                            aria-describedby="passwordHelpInline"
                        />
                    </div>
                    <button
                        type="button"
                        class="btn btn-lg mt-4 text-center"
                        style="background-color: #63459b; color: #fff"
                    >
                        Change Password
                    </button>
                </div>
            </div>
        </div>
    </HomeLayout>
</template>
