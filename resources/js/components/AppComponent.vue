<template>
    <div class="app_wrapper">
        <div id="AdminLayout" v-if="this.$route.meta.layout == 'AdminLayout'">
            <router-view></router-view>
        </div>
        <div id="OtherLayout" v-else-if="this.$route.meta.layout == 'OtherLayout'">
            <router-view></router-view>
        </div>
        <div id="WebLayout" v-else>
            <WebTopBar></WebTopBar>
            <WebNavBar></WebNavBar>
            <div class="container">
                <router-view></router-view>
            </div>
            <WebFooter></WebFooter>
        </div>
    </div>
</template>
<script>

import WebTopBar from '../components/partials/WebTopBar.vue';
import WebNavBar from '../components/partials/WebNavBar.vue';
import WebFooter from '../components/partials/WebFooter.vue';
import { mapActions } from "vuex";

export default {
    components: {WebTopBar, WebNavBar, WebFooter},
    methods: {
        ...mapActions('authUser', ['authCheck']),
    },
    created() {
        this.authCheck();
    }
};
</script>
<style>
body{
    background: #e8f7f0;
}
</style>

