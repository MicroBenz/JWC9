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
    school:'',
    educationLevel:'',
    educationMajor:'',
    shirtSize:'',
    allergy:'',
    foodType:'',
    foodAllergic:'',
    drugAllergic:'',
    generalAns1:'',
    generalAns2:'',
    generalAns3:'',
    generalAns4:'',
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
    school: state => state.school,
    educationLevel: state => state.educationLevel,
    educationMajor: state => state.educationMajor,
    shirtSize: state => state.shirtSize,
    allergy: state => state.allergy,
    foodType: state => state.foodType,
    foodAllergic: state => state.foodAllergic,
    drugAllergic: state => state.drugAllergic,
    generalAns1: state => state.generalAns1,
    generalAns2: state => state.generalAns2,
    generalAns3: state => state.generalAns3,
    generalAns4: state => state.generalAns4,
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
    },
    setSchool(state, school){
        state.school = school;
    },
    setEducationLevel(state, educationLevel){
        state.educationLevel = educationLevel;
    },
    setEducationMajor(state, educationMajor){
        state.educationMajor = educationMajor;
    },
    setShirtSize(state, shirtSize){
        state.shirtSize = shirtSize;
    },
    setAllergy(state, allergy){
        state.allergy = allergy;
    },
    setFoodType(state, foodType){
        state.foodType = foodType;
    },
    setFoodAllergic(state, foodAllergic){
        state.foodAllergic = foodAllergic;
    },
    setDrugAllergic(state, drugAllergic){
        state.drugAllergic = drugAllergic;
    },
    setGeneralAns1(state, generalAns1){
        state.generalAns1 = generalAns1;
    },
    setGeneralAns2(state, generalAns2){
        state.generalAns2 = generalAns2;
    },
    setGeneralAns3(state, generalAns3){
        state.generalAns3 = generalAns3;
    },
    setGeneralAns4(state, generalAns4){
        state.generalAns4 = generalAns4;
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
    },
    setDataStep3({ commit }, payload){
        commit('setSchool',payload.school);
        commit('setEducationLevel',payload.educationLevel);
        commit('setEducationMajor',payload.educationMajor);
        commit('setShirtSize',payload.shirtSize);
        commit('setAllergy',payload.allergy);
        commit('setFoodType',payload.foodType);
        commit('setFoodAllergic',payload.foodAllergic);
        commit('setDrugAllergic',payload.drugAllergic);
    },
    setDataStep4({ commit }, payload){
        commit('setGeneralAns1', payload.generalAns1);
        commit('setGeneralAns2', payload.generalAns2);
        commit('setGeneralAns3', payload.generalAns3);
        commit('setGeneralAns4', payload.generalAns4);
    }
  }
}