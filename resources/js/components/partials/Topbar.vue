<template>
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <router-link class="link-secondary" to="/">Subscribe</router-link>
                </div>
                <div class="col-4 text-center">
                    <router-link class="blog-header-logo text-body-emphasis text-decoration-none" to="/">Large</router-link>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <router-link class="link-secondary" to="/" aria-label="Search">
                        <font-awesome-icon :icon="['fas', 'magnifying-glass']" class="mx-3" />
                    </router-link>
                    <a class="btn btn-sm btn-outline-secondary" href="/login" v-if="!getAuthStatus">Sign In</a>
                    <a class="btn btn-sm btn-outline-secondary" href="/register" v-if="!getAuthStatus">Sign Up</a>
                    <div class="dropdown" v-if="getAuthStatus">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ getAuthUser.name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
    methods: {
        logout() {

        }
    },
    computed: mapGetters('authUser', ['getAuthUser', 'getAuthStatus'])
};
</script>