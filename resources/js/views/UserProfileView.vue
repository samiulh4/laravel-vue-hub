<template>
    <div class="user_profile_page">
        <div class="user_profile">
            <UserProfileWebForm/>
        </div>
    </div>
</template>
<script>
import UserProfileWebForm from "../components/users/UserProfileWebForm.vue";

export default {
    name: "UserProfileView",
    components: {UserProfileWebForm}
};
</script>
<style scoped>
.user_profile {
    margin-bottom: 80px;
}
</style>
