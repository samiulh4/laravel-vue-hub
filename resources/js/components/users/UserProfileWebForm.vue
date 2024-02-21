<template>
    <form @submit="handleSubmit">
        <div class="card">
            <div class="card-header">
                <h5> User Profile Form </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" v-model="name"/>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">E-Mail</label>
                        <input type="text" class="form-control" placeholder="Enter email" v-model="email" disabled/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select" v-model="gender_code">
                            <option value="">--SELECT--</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Country</label>
                        <select class="form-select" v-model="country_code">
                            <option value="">--SELECT--</option>
                            <option value="BGD">Bangladesh</option>
                            <option value="PAK">Pakistan</option>
                            <option value="IND">India</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label">Bio</label>
                        <textarea class="form-control" rows="3" v-model="bio"></textarea>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Upload an image</label>
                            <input class="form-control" type="file" v-on:change="onAvatarChange"/>
                        </div>
                        <div class="col-md-6">
                            <img class="img-thumbnail rounded user_thumbnail"
                                 :src="avatarPreview"
                                 alt="..." @error="handleAvatarError"/>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-success mt-3">Submit</button>
            </div>
        </div>
    </form>
</template>
<script>
import axios from "axios";
import defaultUser from "../../images/default-user.png";
import imageNotFound from "../../images/image-not-found.webp";
export default {
    data() {
        return {
            name: null,
            email: null,
            gender_code: null,
            country_code: null,
            bio: null,
            avatar: null,
            avatarPreview: defaultUser,
        }
    },
    methods: {
        handleAvatarError(e) {
            e.target.src = imageNotFound;
        },
        onAvatarChange(e) {
            this.avatar = e.target.files[0];
            const reader = new FileReader();
            reader.onload = (event) => {
                this.avatarPreview = event.target.result;
            };
            if (this.avatar) {
                reader.readAsDataURL(this.avatar);
            } else {
                this.avatarPreview = defaultUser;
            }
        },
        async getAuthUserData() {
            try {
                axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
                const response = await axios.get('/authentication/check');
                if(response.status === 200){
                    this.name = response.data.data.name;
                    this.email = response.data.data.email;
                    this.gender_code = response.data.data.gender_code;
                    this.country_code = response.data.data.country_code;
                    this.bio = response.data.data.bio;
                    this.avatarPreview = response.data.data.avatar;
                }
            } catch (error) {
                alert('Error during authentication check : '+error.message);
            }
        },
        async handleSubmit(e)
        {
            e.preventDefault();
            let form = new FormData();
            form.append('name', this.name);
            form.append('gender_code', this.gender_code);
            form.append('country_code', this.country_code);
            form.append('bio', this.bio);
            form.append('avatar', this.avatar);
            try {
                const response = await axios.post('/authentication/web/update-auth-user', form);
                if(response.data.success === true){
                    this.avatarPreview = response.data.data.avatar;
                }
                alert(response.data.message);
            } catch (error) {
                alert('Error Auth user profile !'+ error.message);
            }
        }
    },
    created() {
        this.getAuthUserData();
    }
};
</script>
<style>
img.user_thumbnail {
    width: 100px;
    height: 100px;
}
</style>
