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
            const response = await axios.get('/authentication/check');
            commit('setAuthenticationStatus', response.data.is_authenticated);
            commit('setUser', response.data.user);
        } catch (error) {
            console.error('Error during authentication check [AUTH_STORE]: ', error);
            commit('setAuthenticationStatus', false);
            commit('setUser', {});
        }
    },
    async authSignIn({commit}, userData){
        try{
            const response = await axios.post('/authentication/web/sign-in',userData);
            console.log(response);
            if(response.data.is_authenticated === true){
                //await commit('authCheck');
                commit('setAuthenticationStatus', response.data.is_authenticated);
                commit('setUser', response.data.user);
            }
        } catch (error){
            console.error('Error during authentication sign in [AUTH_STORE]: ', error);
        }
    },
    async authSignOut({ commit }) {
        try {
            const response = await axios.get('/authentication/sign-out');
            commit('setAuthenticationStatus', false);
            commit('setUser', {});
        } catch (error) {
            console.error('Error during authentication sign out : [AUTH_STORE]', error);
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
