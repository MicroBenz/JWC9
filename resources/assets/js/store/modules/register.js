export default {
  state: {
    selectedRole: 'none',
    firstnameEN: '',
    lastnameEN: '',
    firstnameTH: '',
    lastnameTH: ''
  },
  getters: {
    selectedRole: state => state.selectedRole,
    firstnameEN: state => state.firstnameEN,
    lastnameEN: state => state.lastnameEN,
    firstnameTH: state => state.firstnameTH,
    lastnameTH: state => state.lastnameTH
  },
  mutations: {
    setSelectedRole(state, payload){
        state.selectedRole = payload.selectedRole;
    },
    setNameEN(state, payload){
        state.firstnameEN = payload.firstnameEN;
        state.lastnameEN = payload.lastnameEN;
    },
    setNameTH(state, payload){
        state.firstnameTH = payload.firstnameTH;
        state.lastnameTH = payload.lastnameTH;
    },
  },
  actions: {
    setSelectedRole({ commit }, payload){
        commit('setSelectedRole', payload);
    },
    setNameEN({ commit }, payload){
        commit('setNameEN', payload);
    },
    setNameTH({ commit }, payload){
        commit('setNameTH', payload);
    },
  }
}