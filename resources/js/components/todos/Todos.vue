<template>
  <div>
    <h3>Todos</h3>
    <div class="legend">
      <span>Double click to mark as complete</span>
      <span>
        <span class="incomplete-box"></span> = Incomplete
      </span>
      <span>
        <span class="complete-box"></span> = Complete
      </span>
    </div>
    <div class="todos">
      <div v-for="todo in allTodos" :key="todo.id" class="todo" :class="{ 'is-complete': todo.is_completed }">
        <p>{{ todo.user_email }}</p>
        <p>{{ todo.title }}</p>
        <p>{{ todo.due_date }}</p>
        <div class="todo-icon" v-if="getAuthUser">
          <font-awesome-icon :icon="['far', 'times-circle']" @click="onDblClick(todo)" v-if="todo.is_completed" />
          <font-awesome-icon :icon="['fas', 'check']" @click="onDblClick(todo)" v-if="!todo.is_completed" />
          <font-awesome-icon :icon="['fas', 'trash-alt']" @click="deleteTodo(todo.id)" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Todos",
  methods: {
    ...mapActions('todos', ["fetchTodos", "deleteTodo", "updateTodo"]),
    onDblClick(todo) {
      const updTodo = {
        id: todo.id,
        is_completed: !todo.is_completed
      };

      this.updateTodo(updTodo);
    }
  },
  computed: {
    ...mapGetters('authUser', ['getAuthUser', 'getAuthStatus']),
    ...mapGetters('todos', ['allTodos']),
  },
  created() {
    this.fetchTodos();
  }
};
</script>

<style scoped>
.todos {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1rem;
}

.todo {
  border: 1px solid #ccc;
  background: #41b883;
  padding: 1rem;
  border-radius: 5px;
  text-align: center;
  position: relative;
}

.todo p {
  color: #fff;
  margin: 0;
}

i {
  position: absolute;
  bottom: 10px;
  right: 10px;
  color: #fff;
  cursor: pointer;
}

.svg-inline--fa {
  padding: 0 5px;
  cursor: pointer;
}

svg.svg-inline--fa.fa-check {
  color: green;
}

svg.svg-inline--fa.fa-circle-xmark {
  color: gold;
}

svg.svg-inline--fa.fa-trash-can {
  color: red;
}



.legend {
  display: flex;
  justify-content: space-around;
  margin-bottom: 1rem;
}

.complete-box {
  display: inline-block;
  width: 10px;
  height: 10px;
  background: #35495e;
}

.incomplete-box {
  display: inline-block;
  width: 10px;
  height: 10px;
  background: #41b883;
}

.is-complete {
  background: #35495e;
  color: #fff;
}

@media (max-width: 500px) {
  .todos {
    grid-template-columns: 1fr;
  }
}
</style>