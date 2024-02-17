<template>
    <div class="user_profile_page">
        <Topbar />
        <Navbar />
        <div class="container">
            <div class="user_profile">
                <UserProfileWebForm/>
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import {mapGetters} from "vuex";
import Navbar from '../components/partials/Navbar.vue';
import Footer from '../components/partials/Footer.vue';
import Topbar from '../components/partials/Topbar.vue';
import UserProfileWebForm from "../components/users/UserProfileWebForm.vue";
export default {
    name: "UserProfileView",
    components: { Navbar, Footer, Topbar, UserProfileWebForm }
};
</script>
<style scoped>
.user_profile{
    margin-bottom: 80px;
}
</style>
