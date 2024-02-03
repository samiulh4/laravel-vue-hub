<template>
  <div class="app_wrapper">
    <router-view />
  </div>
</template>
<script>
import { mapActions } from "vuex";

export default {
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
.app_wrapper{
  display: block;
  position: relative;
}
</style>
