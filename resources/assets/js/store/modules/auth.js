export default {
  state: {
    isFacebookApiReady: false,
    isLoggedIn: false
  },
  getters: {
    isLoggedIn: state => state.isLoggedIn,
    isFacebookApiReady: state => state.isFacebookApiReady
  },
  mutations: {
    setLoginStatus(state, isLoggedIn) {
      state.isLoggedIn = isLoggedIn;
    },
    facebookApiReady(state) {
      state.isFacebookApiReady = true;
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
    }
  }
}