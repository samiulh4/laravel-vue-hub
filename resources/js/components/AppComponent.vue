<template>
  <div class="page_wrapper">
    <Navbar></Navbar>
    <div class="container">
        <router-view />
    </div>
  </div>
  <Footer></Footer>
</template>

<script>
import Navbar from "./partials/Navbar.vue";
import Footer from "./partials/Footer.vue";
export default {
  components: { Navbar,Footer },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
