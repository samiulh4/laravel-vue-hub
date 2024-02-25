<template>
    <div class="blog_view">
<!--        <Topbar />-->
<!--        <Navbar />-->
        <main class="container">
            <div class="row pb-3">
                <div class="col-md-12">
                    <button class="btn btn-sm btn-success float-end" v-on:click="createModal">New Blog</button>
                </div>
            </div>


            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                            <h3 class="mb-0">Featured post</h3>
                            <div class="mb-1 text-body-secondary">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                Continue reading
                                <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-body-secondary">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                Continue reading
                                <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                    </div>
                </div>
            </div>



        </main>
<!--        <BlogFooter/>-->
    </div>

    <!-- start -:- Modal -->
    <div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="blogModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="email" class="form-control" />
                            <div class="form-text"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="closeModal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end -:- Modal -->
</template>
<script>
import Topbar from '../components/partials/Topbar.vue';
import Navbar from '../components/partials/Navbar.vue';
import BlogFooter from '../components/partials/BlogFooter.vue';
import UserProfileWebForm from "../components/users/UserProfileWebForm.vue";

export default {
    name:"BlogView",
    components: { Navbar, BlogFooter, Topbar },
    methods:{
        createModal(){
            let blogModal = document.getElementById('blogModal');
            blogModal.classList.add('show');
            blogModal.style.display = 'block';

            // Show the modal
            //myModal.show();
            //$('#exampleModal').modal('show');
        },
        closeModal()
        {
            let blogModal = document.getElementById('blogModal');
            blogModal.classList.remove('show');
            blogModal.style.display = 'none';
        }
    }
};
</script>
