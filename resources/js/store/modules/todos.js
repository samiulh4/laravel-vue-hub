import axios from "axios";

const state = {
    todos: []
};

const mutations = {
    setTodos: (state, todos) => (state.todos = todos),
    newTodo: (state, todo) => state.todos.unshift(todo),
    removeTodo: (state, id) => (state.todos = state.todos.filter(todo => todo.id !== id)),
    updateTodo: (state, updTodo) => {
        const index = state.todos.findIndex(todo => todo.id === updTodo.id);
        if (index !== -1) {
            state.todos.splice(index, 1, updTodo);
        }
    }
};

const actions = {
    async fetchTodos({ commit }) {
        const response = await axios.get('/todo/get-all');
        commit('setTodos', response.data.data);
    },
    async addTodo({ commit }, title) {
        try {
            const response = await axios.post('/todo/add', { 'title': title });
            console.log(response);
            commit('newTodo', response.data.data);
        } catch (error) {
            console.log('ERROR ADD TODO', error);
        }
    },
    async deleteTodo({ commit }, id) {
        if (confirm('Are you want to sure for delete ?')) {
            const response = await axios.delete(`/todo/delete/${id}`);
            commit('removeTodo', id);
        } else {
            return false;
        }
    },
    async filterTodos({ commit }, e) {
        const limit = parseInt(e.target.options[e.target.options.selectedIndex].innerText);
        const response = await axios.get(`/todo/get-all?_limit=${limit}`);
        commit('setTodos', response.data.data);
    },
    async updateTodo({ commit }, updTodo) {
        const response = await axios.put(`/todo/update/${updTodo.id}`, updTodo);
        commit('updateTodo', response.data.data);
    }
};

const getters = {
    allTodos: (state) => state.todos
};

export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
};
