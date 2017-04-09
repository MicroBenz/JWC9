<template>
  <div>
    <h1 class="text-center">Other</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">โรงเรียนที่จบการศึกษาชั้นปีล่าสุด</label>
                        <input v-model="schoolX" type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-6 col-sm-3 col-md-3 form-group">
                        <label for="thai-name">ระดับชั้นที่จบ</label>
                        <div class="select-wrapper">
                            <select v-model="educationLevelX" class="form-control setHeight" id="selBelieve">
                                <option value="" selected disabled>เลือก</option>
                                <option value="m3">จบ ม.3 (ขึ้น ม.4)</option>
                                <option value="m4">จบ ม.4 (ขึ้น ม.5)</option>
                                <option value="m5">จบ ม.5 (ขึ้น ม.6)</option>
                                <option value="m6">จบ ม.6</option>
                                <option value="m3-pvc1">จบ ม.3 (ขึ้น ปวช. ปี 1)</option>
                                <option value="pvc1-pvc2">จบ ปวช. ปี1 (ขึ้น ปวช. ปี 2)</option>
                                <option value="pvc2-pvc3">จบ ปวช. ปี2 (ขึ้น ปวช. ปี 3)</option>
                                <option value="topvs">จบ ปวช. ขึ้น ปวส.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 form-group">
                        <label for="thai-name">สายการเรียน</label>
                        <input v-model="educationMajorX" type="text" class="form-control" id="setBelieve">
                        <!--<div class="select-wrapper">
                            <select v-model="educationMajorX" class="form-control setHeight" id="selBelieve">
                                <option value="" selected disabled>เลือก</option>
                                <option value="วิทย์ - คณิต">วิทย์ - คณิต</option>
                                <option value="ศิลป์- คำนวน">ศิลป์- คำนวน</option>
                                <option value="ศิลป์- ภาษา">ศิลป์- ภาษา</option>
                                <option value="วิทย์ - คอม">วิทย์ - คอม</option>
                                <option value="ศิลป์ - สังคม">ศิลป์ - สังคม</option>
                            </select>
                        </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3 form-group">
                        <label for="thai-name">ไซส์เสื้อ</label>
                        <div class="select-wrapper">                        
                            <select v-model="shirtSizeX" class="form-control setHeight" id="selBelieve">
                                <option value="" selected disabled>เลือก</option>
                                <option value="S">S (รอบอก 36")</option>
                                <option value="M">M (รอบอก 38")</option>
                                <option value="L">L (รอบอก 40")</option>
                                <option value="XL">XL (รอบอก 42")</option>
                                <option value="XXL">XXL (รอบอก 44")</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9 form-group">
                        <label for="thai-name">โรคประจำตัว</label>
                        <input v-model="allergyX" type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="sel1">อาหารที่รับประทาน</label>
                        <div class="select-wrapper">
                            <select v-model="foodTypeX" class="form-control setHeight" id="selSex">
                                <option value="" selected disabled>เลือก</option>
                                <option value="ปกติ">ปกติ</option>
                                <option value="เจ">เจ</option>
                                <option value="อิสลาม">อิสลาม</option>
                                <option value="มังสวิรัต">มังสวิรัต</option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">อาหารที่แพ้/ไม่สามารถรับประทานได้</label>
                        <input v-model="foodAllergicX" type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">ยาที่แพ้</label>
                        <input v-model="drugAllergicX" type="text" class="form-control" id="thai-name">
                    </div>    
                </div>
            </div>
        </div>
        <!--<img v-on:click="goNext()" class="next-btn" src="./right-btn.png">
        <img v-on:click="goBack()" class="back-btn" src="./left-btn.png">     -->
        <a class="next-btn" v-on:click="goNext()">
            <i class="fa fa-angle-right" />
        </a>
        <a class="back-btn" v-on:click="goBack()">
            <i class="fa fa-angle-left" />
        </a>
        <router-link to="/" class="back-to-menu">กลับสู่หน้าหลัก</router-link>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import axios from 'axios'
  export default {
    data(){
        return {
            schoolX: this.$store.getters.school,
            educationLevelX: this.$store.getters.educationLevel,
            educationMajorX: this.$store.getters.educationMajor,
            shirtSizeX: this.$store.getters.shirtSize,
            allergyX: this.$store.getters.allergy,
            foodTypeX: this.$store.getters.foodType,
            foodAllergicX: this.$store.getters.foodAllergic,
            drugAllergicX: this.$store.getters.drugAllergic,
        }
    },
    computed: mapGetters({
        school:'school',
        educationLevel:'educationLevel',
        educationMajor:'educationMajor',
        shirtSize:'shirtSize',
        allergy:'allergy',
        foodType:'foodType',
        foodAllergic:'foodAllergic',
        drugAllergic:'drugAllergic',
    }),
    mounted() {
        
        
    },
    updated() {
        console.log('updated')
        
    },
    methods: {
        goNext() {
            this.$store.dispatch('setDataStep3',{
                school: this.schoolX,
                educationLevel: this.educationLevelX,
                educationMajor: this.educationMajorX,
                shirtSize: this.shirtSizeX,
                allergy: this.allergyX,
                foodType: this.foodTypeX,
                foodAllergic: this.foodAllergicX,
                drugAllergic: this.drugAllergicX,
            })
            axios.defaults.headers.common['Authorization'] = 'Bearer '+this.$store.getters.accessToken;
            axios({
                method: 'put',
                url:'/api/register',
                data:{
                    SchoolName: this.schoolX,
                    EducationLevel: this.educationLevelX,
                    EducationMajor: this.educationMajorX,
                    ShirtSize: this.shirtSizeX,
                    Allergy: this.allergyX,
                    FoodType: this.foodTypeX,
                    FoodAllergic: this.foodAllergicX,
                    DrugAllergic: this.drugAllergicX,
                }
            }).then((response) => {
                console.log(response.data);
                if(response.data.status == 'OK'){
                    this.$router.push('/register/step4');
                }
                else{
                    console.log('something error in calling api in step3')
                }
                
            })
            // this.$router.push('/register/step4');
        },
        goBack() {
            this.$router.push('/register/step2');
        }
    }
  }
</script>
<style lang="scss" scoped>
@import '../../../sass/_variables.scss';
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
        @include circleButton();
        right: 35px;   
    }
    .back-btn {
        @include circleButton();
        left: 35px;
    }
    .back-to-menu {
        @include registerBack();
    }
    .text-center {
        @media(max-width: 768px) {
            // font-size: 35px;
            font-size: 40px;
            padding-bottom: 65px;
        }
        @media only screen 
        and (min-device-width : 768px) 
        and (max-device-width : 1024px)  {
            font-size: 70px;
            padding-bottom: 0px;
        }
    }
</style>
