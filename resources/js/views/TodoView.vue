<template>
    <div class="todo_view">
        <div class="row">
            <div class="col-md-12">
                <div class="todo_view_page">
                    <AddTodo/>
                    <FilterTodos/>
                    <Todos/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Todos from '../components/todos/Todos.vue';
import AddTodo from '../components/todos/AddTodo.vue';
import FilterTodos from '../components/todos/FilterTodos.vue';

export default {
    name: "TodoView",
    components: {Todos, AddTodo, FilterTodos}
};
</script>
<style scoped>
.todo_view {
    display: block;
    position: relative;
    margin-bottom: 80px;
}

.todo_view_page {
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    line-height: 1.6;
}
</style>
