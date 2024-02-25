<template>
    <div class="web-layout">
        <Topbar />
        <Navbar />
        <div class="container">
            <router-view />
        </div>
        <Footer />
    </div>
</template>

<script>
import Footer from '../components/partials/Footer.vue';
import Navbar from '../components/partials/Navbar.vue';
import Topbar from '../components/partials/Topbar.vue';
import BannerImage from "../images/banner.webp";

export default {
    components: { Topbar, Navbar, Footer },
};
</script>

<style scoped>

</style>
