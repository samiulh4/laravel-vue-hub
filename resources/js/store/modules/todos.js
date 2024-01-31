import axios from "axios";

const state = {
    todos: []
};

const mutations = {
    setTodos: (state, todos) => (state.todos = todos),
    newTodo: (state, todo) => state.todos.unshift(todo),
    removeTodo:(state, id) => (state.todos = state.todos.filter(todo => todo.id !== id))
};

const actions = {
    async fetchTodos({ commit }){
        const response = await axios.get('http://localhost:8000/api/todo/get-all');
        commit('setTodos', response.data.data);
    },
    async addTodo({commit}, title){
        const response = await axios.post('http://localhost:8000/api/todo/add', {'title':title});
        commit('newTodo', response.data.data);
    },
    async deleteTodo({commit}, id){
        const response = await axios.delete(`http://localhost:8000/api/todo/delete/${id}`);
        commit('removeTodo', id);
    }
};

const getters = {
    allTodos: (state) => state.todos
};

export default {
    state,
    mutations,
    actions,
    getters
};
