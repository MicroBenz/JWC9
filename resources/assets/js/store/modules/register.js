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
    marketingAns1:'',
    marketingAns2:'',
    contentAns1:'',
    contentAns2:'',
    designAns1:'',
    designAns2:'',
    profileImg: '',
    designImg: '',
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
    marketingAns1: state => state.marketingAns1,
    marketingAns2: state => state.marketingAns2,
    contentAns1: state => state.contentAns1,
    contentAns2: state => state.contentAns2,
    designAns1: state => state.designAns1,
    designAns2: state => state.designAns2,
    profileImg: state => state.profileImg,
    designImg: state => state.designImg,
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
    setMarketingAns1(state, marketingAns1){
        state.marketingAns1 = marketingAns1;
    },
    setMarketingAns2(state, marketingAns2){
        state.marketingAns2 = marketingAns2;
    },
    setContentAns1(state, contentAns1){
        state.contentAns1 = contentAns1;
    },
    setContentAns2(state, contentAns2){
        state.contentAns2 = contentAns2;
    },
    setDesignAns1(state, designAns1){
        state.designAns1 = designAns1;
    },
    setDesignAns2(state, designAns2){
        state.designAns2 = designAns2;
    },
    setProfileImg(state, profileImg) {
        state.profileImg = profileImg;
    },
    setDesignImg(state, designImg) {
        state.designImg = designImg;
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
    setDesignImg({ commit }, payload){
        commit('designImg', payload.designImg)
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
        commit('setProfileImg', payload.ProfilePicture);
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
    },
    setDataStep5Marketing({ commit }, payload){
        commit('setMarketingAns1', payload.marketingAns1);
        commit('setMarketingAns2', payload.marketingAns2);
    },
    setDataStep5Content({ commit }, payload){
        commit('setContentAns1', payload.contentAns1);
        commit('setContentAns2', payload.contentAns2);
    },
    setDataStep5Design({ commit }, payload){
        commit('setDesignAns1', payload.designAns1);
        commit('setDesignAns2', payload.designAns2);
    }
    
  }
}