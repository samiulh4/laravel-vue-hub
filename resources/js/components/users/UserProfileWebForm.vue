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
                        <input type="text" class="form-control" placeholder="Enter email" v-model="email"/>
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
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Upload an image</label>
                        <input class="form-control" type="file"/>
                    </div>
                    <div class="col-md-6">
                        <img class="user_thumbnail"
                             src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-outline-user-icon-png-image_5045523.jpg"
                             alt="..."/>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-success mt-3">Submit</button>
            </div>
        </div>
    </form>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            name: '',
            email: '',
            gender_code: '',
            country_code: '',
            bio: '',
        }
    },
    methods: {
        async getAuthUserData() {
            try {
                const response = await axios.get('/auth/check');
                if(response.status === 200){
                    this.name = response.data.data.name;
                    this.email = response.data.data.email;
                    this.gender_code = response.data.data.gender_code;
                    this.country_code = response.data.data.country_code;
                    this.bio = response.data.data.bio;
                }
            } catch (error) {
                alert('Error during authentication check:');
            }
        },
        async handleSubmit(e)
        {
            e.preventDefault();
            const user = {
                'name': this.name,
                'gender_code': this.gender_code,
                'country_code': this.country_code,
                'bio': this.bio,
            };
            try {
                const response = await axios.post('/auth/web/update-auth-user', user);
                console.log(response);
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
