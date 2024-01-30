<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Todo Application</h1>
                <hr/>
                <ul class="todo-list">
                    <li v-for="todo in allTodos" :key="todo.id">{{ todo.title }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
export default{
    name:"TodoView",
    computed: {
    ...mapGetters(['allTodos']),
  },
};
</script>
<style scoped>
.todo-list{
    /* display: flex;
    flex-direction: row; */
}
</style>