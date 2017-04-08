export default {
  state: {
    selectedRole: 'none',
    firstnameEN: '',
    lastnameEN: '',
    firstnameTH: '',
    lastnameTH: '',
    nickname:'',
    sex:'',
    religion:'',
    birthdate:'',
    province:'',
    bloodType:'',
    telephone:'',
    email:'',
    emergencyFirstname:'',
    emergencyLastname:'',
    emergencyTelephone:'',
    emergencyRelationship:'',
    jwcDiscoveryChannel:'',
  },
  getters: {
    selectedRole: state => state.selectedRole,
    firstnameEN: state => state.firstnameEN,
    lastnameEN: state => state.lastnameEN,
    firstnameTH: state => state.firstnameTH,
    lastnameTH: state => state.lastnameTH,
    nickname: state => state.nickname,
    sex: state => state.sex,
    religion: state => state.religion,
    birthdate: state => state.birthdate,
    province: state => state.province,
    bloodType: state => state.bloodType,
    telephone: state => state.telephone,
    email: state => state.email,
    emergencyFirstname: state => state.emergencyFirstname,
    emergencyLastname: state => state.emergencyLastname,
    emergencyTelephone: state => state.emergencyTelephone,
    emergencyRelationship: state => state.emergencyRelationship,
    jwcDiscoveryChannel: state => state.jwcDiscoveryChannel,
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
    setFirstnameEN(state, firstnameEN){
        state.firstnameEN = firstnameEN;
    },
    setLastNameEN(state, lastnameEN){
        state.lastnameEN = lastnameEN;
    },
    setFirstNameTH(state, firstnameTH){
        state.firstnameTH = firstnameTH;
    },
    setLastNameTH(state, lastnameTH){
        state.lastnameTH = lastnameTH;
    },
    setNickname(state, nickname){
        state.nickname = nickname;
    },
    setSex(state, sex){
        state.sex = sex;
    },
    setReligion(state, religion){
        state.religion = religion;
    },
    setBirthDate(state, birthdate){
        state.birthdate = birthdate;
    },
    setProvince(state, province){
        state.province = province;
    },
    setBloodType(state, bloodType){
        state.bloodType = bloodType;
    },
    setTelephone(state, telephone){
        state.telephone = telephone;
    },
    setEmail(state, email){
        state.email = email;
    },
    setEmergencyFirstname(state, emergencyFirstname){
        state.emergencyFirstname = emergencyFirstname;
    },
    setEmergencyLastname(state, emergencyLastname){
        state.emergencyLastname = emergencyLastname;
    },
    setEmergencyTelephone(state, emergencyTelephone){
        state.emergencyTelephone = emergencyTelephone;
    },
    setEmergencyRelationship(state, emergencyRelationship){
        state.emergencyRelationship = emergencyRelationship;
    },
    setJwcDiscoveryChannel(state, jwcDiscoveryChannel){
        state.jwcDiscoveryChannel = jwcDiscoveryChannel;
    }

    
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
    setDataStep1({ commit }, payload){
        commit('setFirstnameEN', payload.firstnameEN);
        commit('setLastNameEN', payload.lastnameEN);
        commit('setFirstNameTH', payload.firstnameTH);
        commit('setLastNameTH', payload.lastnameTH);
        commit('setNickname', payload.nickname);
        commit('setSex', payload.sex);
        commit('setReligion', payload.religion);
        commit('setBirthDate', payload.birthdate);
        commit('setProvince', payload.province);
        commit('setBloodType', payload.bloodType);
    },
    setDataStep2({ commit }, payload){
        commit('setTelephone', payload.telephone);
        commit('setEmail', payload.email);
        commit('setEmergencyFirstname', payload.emergencyFirstname);
        commit('setEmergencyLastname', payload.emergencyLastname);
        commit('setEmergencyTelephone', payload.emergencyTelephone);
        commit('setEmergencyRelationship', payload.emergencyRelationship);
        commit('setJwcDiscoveryChannel', payload.jwcDiscoveryChannel);
    }
  }
}