<script setup>
import orderlist from "../Components/Partials/orderlist.vue";

import Footer from "../Components/Partials/Footer.vue";



</script>

<template>
    <main>
        <article>
            <orderlist />

            <slot />

            <Footer />
        </article>
    </main>
</template>
