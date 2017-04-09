<template>
  <div>
    <h1 class="text-center">Success</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">                
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Success</h3>
                        
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import axios from 'axios'
  export default {
    data(){
        return {
            selectedRoleX: this.$store.getters.selectedRole,
            firstnameENX: this.$store.getters.firstnameEN,
            lastnameENX: this.$store.getters.lastnameEN,
            firstnameTHX: this.$store.getters.firstnameTH,
            lastnameTHX: this.$store.getters.lastnameTH,
            nicknameX: this.$store.getters.nickname,
            sexX:this.$store.getters.sex,
            religionX: this.$store.getters.religion,
            birthdateX:this.$store.getters.birthdate,
            provinceX: this.$store.getters.province,
            bloodTypeX: this.$store.getters.bloodType,
            telephoneX: this.$store.getters.telephone,
            emailX: this.$store.getters.email,
            emergencyFirstnameX: this.$store.getters.emergencyFirstname,
            emergencyLastnameX: this.$store.getters.emergencyLastname,
            emergencyTelephoneX: this.$store.getters.emergencyTelephone,
            emergencyRelationshipX: this.$store.getters.emergencyRelationship,
            jwcDiscoveryChannelX: this.$store.getters.jwcDiscoveryChannel,
            schoolX: this.$store.getters.school,
            educationLevelX: this.$store.getters.educationLevel,
            educationMajorX: this.$store.getters.educationMajor,
            shirtSizeX: this.$store.getters.shirtSize,
            allergyX: this.$store.getters.allergy,
            foodTypeX: this.$store.getters.foodType,
            foodAllergicX: this.$store.getters.foodAllergic,
            drugAllergicX: this.$store.getters.drugAllergic,
            generalAns1X: this.$store.getters.generalAns1,
            generalAns2X: this.$store.getters.generalAns2,
            generalAns3X: this.$store.getters.generalAns3,
            generalAns4X: this.$store.getters.generalAns4,
            marketingAns1X: this.$store.getters.marketingAns1,
            marketingAns2X: this.$store.getters.marketingAns2,
            contentAns1X: this.$store.getters.contentAns1,
            contentAns2X: this.$store.getters.contentAns2,
            designAns1X: this.$store.getters.designAns1,
            designAns2X: this.$store.getters.designAns2,
        }
    },
    computed: mapGetters({
        selectedRole: 'none',
        firstnameEN: 'firstnameEN',
        lastnameEN: 'lastnameEN',
        firstnameTH: 'firstnameTH',
        lastnameTH: 'lastnameTH',
        nickname: 'nickname',
        sex: 'sex',
        religion:'religion',
        birthdate:'birthdate',
        province:'province',
        bloodType:'bloodType',
        telephone:'telephone',
        email:'email',
        emergencyFirstname:'emergencyFirstname',
        emergencyLastname:'emergencyLastname',
        emergencyTelephone:'emergencyTelephone',
        emergencyRelationship:'emergencyRelationship',
        jwcDiscoveryChannel:'jwcDiscoveryChannel',
        school:'school',
        educationLevel:'educationLevel',
        educationMajor:'educationMajor',
        shirtSize:'shirtSize',
        allergy:'allergy',
        foodType:'foodType',
        foodAllergic:'foodAllergic',
        drugAllergic:'drugAllergic',
        generalAns1:'generalAns1',
        generalAns2:'generalAns2',
        generalAns3:'generalAns3',
        generalAns4:'generalAns4',
        marketingAns1:'marketingAns1',
        marketingAns2:'marketingAns2',
        contentAns1:'contentAns1',
        contentAns2:'contentAns2',
        designAns1:'designAns1',
        designAns2:'designAns2',
    }),
    mounted() {

    },
    updated() {
        console.log('updated')
        
    },
    methods: {
        submitAnswer() {
            // TODO : lock database
        },
        goBack() {
            if(this.$store.getters.selectedRole == 'marketing'){
                this.$router.push('/register/step5-marketing');
            }
            else if(this.$store.getters.selectedRole == 'content'){
                this.$router.push('/register/step5-content');
            }
            else if(this.$store.getters.selectedRole == 'design'){
                this.$router.push('/register/step5-design');
            }
            else{
                console.log('no state selectedRole')
            }
        }
    }
  }
</script>
<style lang="scss" scoped>
    /*.bootstrap-select ul.dropdown-menu li:first-child {
        display: none;
    }*/
    /*input[type=text] {
        line-height: 18px;
    }

    input[type=submit] {
        line-height: 18px;
    }*/
    input, select {
        /*padding: 20px 10px; 
        line-height: 10px !important;*/
        height:1.5em;
        border: 1px solid white;
        background-color: transparent;
        border-radius: 20px;
        color: white;
    }
    .select-wrapper {
        border-radius: 20px;
        border: 1px solid white;
        padding-left: 10px;
        padding-right: 10px;
        select {
            border: 0;
            outline: none;
            &:focus {
                outline: none;
            }
        }
    }
    .setHeight{
        height:1.5em;
    }
    .nextButton{
        margin-right:3%;
    }
    .questionContainer{
        background-color: rgba(0, 0, 0, 0.3);
        color: white;
        border-radius: 15px;
        padding-bottom: 1em;
        padding-top: 1em;
        position: relative;
        margin-bottom: 75px;
    }
    .questionsDiv{
        padding-left: 10%;
        padding-right: 10%;
    }
    .next-btn {
        width: 50px;
        position: absolute;
        bottom: -25px;
        right: 35px;
        cursor: pointer;
    }
    .back-btn {
        width: 50px;
        position: absolute;
        bottom: -25px;
        left: 35px;
        cursor: pointer;                
    }
    .send-btn {
        height: 50px;
        position: absolute;
        bottom: -25px;
        left: 0;
        cursor: pointer;
        right: 0;
        margin-left: auto;
        margin-right: auto;
    }
</style>
