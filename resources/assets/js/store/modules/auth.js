export default {
  state: {
    isLoggedIn: false
  },
  getters: {
    isLoggedIn: state => state.isLoggedIn,
  },
  mutations: {
    setLoginStatus(state, isLoggedIn) {
      state.isLoggedIn = isLoggedIn;
    }
  },
  actions: {
    setLogin({ commit }) {
      commit('setLoginStatus', true);
    },
    setNotLogin({ commit }) {
      commit('setLoginStatus', false)
    }
  }
}