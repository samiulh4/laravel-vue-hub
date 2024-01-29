<template>
  <div class="home_view">
    <Topbar />
    <Navbar />
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <Footer />
  </div>
</template>
<script>
import Footer from '../components/partials/Footer.vue';
import Navbar from '../components/partials/Navbar.vue';
import Topbar from '../components/partials/Topbar.vue';


export default {
  components: { Topbar, Navbar, Footer }
};
</script>