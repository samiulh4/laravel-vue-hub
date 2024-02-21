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
        <div class="row lex-grow-1">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <img :src="bannerImg" alt="..." class="img-fluid img-thumbnail banner_image"/>
            </div>
        </div>
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
    data(){
      return{
          bannerImg:BannerImage
      }
    }
};
</script>
<style scoped>
.banner_image{

    width:100%;
    height: calc(100vh - 18rem); /* Adjust according to your header and footer heights */
}
.flex-grow-1 {
    flex: 1;
}
</style>
