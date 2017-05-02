export default {
  state: {
    camperID: '',
    isConfirm: false,
  },
  getters: {
    getCamperID: state => state.camperID,
    isCamperConfirm: state => state.isConfirm,
  },
  mutations: {
    setCamperID(state, payload) {
      state.camperID = payload.camperID;
    },
    setIsCamperConfirm(state, payload) {
      state.isCamperConfirm = payload.isCamperConfirm;
    },
  },
  actions: {
    setCamperID({ commit }, payload) {
      commit('setCamperID', payload);
    },
    setIsCamperConfirm({ commit }, payload) {
      commit('setIsCamperConfirm', payload);
    },
  }
}