<template>
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <router-link  class="link-secondary" to="/">Subscribe</router-link >
                </div>
                <div class="col-4 text-center">
                    <router-link class="blog-header-logo text-body-emphasis text-decoration-none" to="/">Large</router-link>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <router-link class="link-secondary" to="/" aria-label="Search">
                        <font-awesome-icon :icon="['fas', 'magnifying-glass']" class="mx-3"/>
                    </router-link>
                    <router-link class="btn btn-sm btn-outline-secondary" to="/">Sign up</router-link>
                </div>
            </div>
        </header>
    </div>
</template>