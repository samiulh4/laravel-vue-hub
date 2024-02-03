import axios from "axios";

const state = {
    user: {},
    is_authenticated: false
};

const mutations = {
    setAuthenticationStatus(state, isAuthenticated) {
        state.is_authenticated = isAuthenticated;
    },
    setUser(state, user) {
        state.user = user;
    }
};

const actions = {
    async authCheck({ commit }) {
        try {
            const response = await axios.get('/auth/check');
            commit('setAuthenticationStatus', response.data.is_authenticated);
            commit('setUser', response.data.data);
        } catch (error) {
            console.error('Error during authentication check:', error);
            commit('setAuthenticationStatus', false);
            commit('setUser', {});
        }
    }
};

const getters = {
    getAuthUser: (state) => state.user,
    getAuthStatus: (state) => state.is_authenticated,
};

export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
};
