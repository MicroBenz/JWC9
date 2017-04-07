export default {
  state: {
    isFacebookApiReady: true,
    isLoggedIn: false,
    accessToken: '',
  },
  getters: {
    isLoggedIn: state => state.isLoggedIn,
    isFacebookApiReady: state => state.isFacebookApiReady,
    accessToken: state => state.accessToken,
  },
  mutations: {
    setLoginStatus(state, isLoggedIn) {
      state.isLoggedIn = isLoggedIn;
    },
    facebookApiReady(state) {
      state.isFacebookApiReady = true;
    },
    setAccessToken(state, payload) {
      state.accessToken = payload.token;
    }
  },
  actions: {
    facebookApiIsReady({ commit }) {
      commit('facebookApiReady');
    },
    setLogin({ commit }) {
      commit('setLoginStatus', true);
    },
    setNotLogin({ commit }) {
      commit('setLoginStatus', false)
    },
    setAccessToken({ commit }, payload) {
      commit('setAccessToken', payload);
    }
  }
}