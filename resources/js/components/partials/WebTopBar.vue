<template>
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <router-link class="link-secondary" to="/">Subscribe</router-link>
                </div>
                <div class="col-4 text-center">
                    <router-link class="blog-header-logo text-body-emphasis text-decoration-none" to="/">
                        <img :src="logo" alt="..." class="top_bar_logo"/>
                    </router-link>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <router-link class="link-secondary" to="#" aria-label="Search">
                        <font-awesome-icon :icon="['fas', 'magnifying-glass']" class="mx-3"/>
                    </router-link>
                    <router-link class="btn btn-sm btn-outline-secondary" :to="{ name: 'SignInView'}" v-if="!getAuthStatus">Sign In</router-link>
                    <a class="btn btn-sm btn-outline-secondary" href="/register" v-if="!getAuthStatus">Sign Up</a>
                    <img :src="getAuthUser.avatar" alt="..." class="mx-3 top_bar_user" @error="handleAvatarError"
                         v-if="getAuthStatus"/>
                    <div class="dropdown" v-if="getAuthStatus">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            {{ getAuthUser.name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <router-link class="dropdown-item" :to="{ name: 'UserProfileView' }">Profile
                                </router-link>
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);" v-on:click="signOut">Sign Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
import vueLogo from "../../images/vue.png";
import imageNotFound from "../../images/image-not-found.webp";
import {mapGetters, mapActions} from "vuex";

export default {
    data() {
        return {
            logo: vueLogo
        }
    },
    methods: {
        ...mapActions('authUser', ['authSignOut']),
        handleAvatarError(e) {
            e.target.src = imageNotFound;
        },
        signOut() {
            this.authSignOut();
            alert('Sign out successfully.');
            this.$router.push({ name: 'SignInView' });
        }
    },
    computed: mapGetters('authUser', ['getAuthUser', 'getAuthStatus'])
};
</script>
<style scoped>
.top_bar_logo {
    height: 30px;
    width: 30px;
}

.top_bar_user {
    height: 30px;
    width: 30px;
    border-radius: 50%;
}
</style>
