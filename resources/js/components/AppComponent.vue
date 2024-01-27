<template>
  <div class="page_wrapper">
    <Navbar />
    <div class="container">
        <router-view />
    </div>
  </div>
</template>

<script>
import Navbar from "./partials/Navbar.vue";
export default {
  components: { Navbar },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
