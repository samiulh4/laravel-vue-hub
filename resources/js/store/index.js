
import { createStore } from 'vuex'
import todos from './modules/todos.js';
import authUser from './modules/authUser.js';

export default createStore({
    modules: {
        todos,
        authUser
    }
  })

