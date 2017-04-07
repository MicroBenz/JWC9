export default {
  state: {
    selectedRole: 'none',
    name: ''
  },
  getters: {
    selectedRole: state => state.selectedRole,
    name: state => state.selectedRole,
  },
  mutations: {
    setSelectedRole(state, selectedRole){
        state.selectedRole = selectedRole;
    },
    setName(state, name){
        state.name = name;
    },
  },
  actions: {
    setSelectedRole({ commit }, payload){
        commit('setSelectedRole', payload.selectedRole);
    },
    setName({ commit }, payload){
        commit('setName', payload.name);
    },
  }
}