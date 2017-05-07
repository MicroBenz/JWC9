export default {
  state: {
    isFacebookApiReady: true,
    isLoggedIn: false,
    accessToken: '',
    camper: {},
  },
  getters: {
    isLoggedIn: state => state.isLoggedIn,
    isFacebookApiReady: state => state.isFacebookApiReady,
    accessToken: state => state.accessToken,
    camper: state => state.camper,
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
    },
    setCamper(state, payload){
      state.camper = payload.camper;
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
    },
    setCamper({ commit }, payload) {
      commit('setCamper', payload);
    }
  }
}