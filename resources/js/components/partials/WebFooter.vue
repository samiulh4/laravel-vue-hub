<template>
    <div class="footer_wrapper">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <font-awesome-icon :icon="['fab', 'bootstrap']" />
                    </a>
                    <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <router-link class="text-body-secondary" to="/">
                            <font-awesome-icon :icon="['fab', 'facebook-f']" />
                        </router-link>
                    </li>
                    <li class="ms-3">
                        <router-link class="text-body-secondary" to="/">
                            <font-awesome-icon :icon="['fab', 'facebook-f']" />
                        </router-link>
                    </li>
                    <li class="ms-3">
                        <router-link class="text-body-secondary" to="/">
                            <font-awesome-icon :icon="['fab', 'facebook-f']" />
                        </router-link>
                    </li>
                </ul>
            </footer>
        </div>
    </div>
</template>
<style scoped>
.footer_wrapper {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 80px;
}
.border-top{
    border-color: #41b883 !important;
}


</style>
