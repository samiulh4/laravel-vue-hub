<template>
    <div class="app_wrapper">
        <component :is="layout">
            <router-view />
        </component>
    </div>
</template>
<script>


export default {
    data() {
        return {
            layout: null
        };
    },
    methods: {
        setLayout() {
            const route = this.$route;
            if (route.meta.requiresAuth) {
                this.layout = 'AdminLayout';
            } else {
                this.layout = 'WebLayout';
            }
        }
    },
    created() {
        this.setLayout();
    }
};
</script>

