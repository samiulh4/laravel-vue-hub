<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<AddTodo/>
                <Todos />
            </div>
        </div>
    </div>
</template>

<script>
import Todos from '../components/todos/Todos.vue';
import AddTodo from '../components/todos/AddTodo.vue';
export default {
    name: "TodoView",
    components: { Todos,AddTodo }
};
</script>
<style scoped>
.container {
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    line-height: 1.6;
    background: #e8f7f0;
}
</style>