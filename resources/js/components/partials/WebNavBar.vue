<template>
    <div class="container">
        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <router-link class="nav-item nav-link link-body-emphasis" :to="{ name: 'HomeView'}">Home</router-link>
                <router-link class="nav-item nav-link link-body-emphasis" :to="{ name: 'TodoView'}">Todo</router-link>
                <router-link class="nav-item nav-link link-body-emphasis" :to="{ name:'BlogView' }">Blog</router-link>
                <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
            </nav>
        </div>
    </div>
</template>
