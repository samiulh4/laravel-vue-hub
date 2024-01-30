import axios from "axios";

const state = {
    todos: [
        { id: 1, title: 'Todo one' },
        { id: 2, title: 'Todo two' },
        { id: 3, title: 'Todo three' },
        { id: 4, title: 'Todo four' },
        { id: 5, title: 'Todo five' },
    ]
};

const mutations = {

};

const actions = {

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
