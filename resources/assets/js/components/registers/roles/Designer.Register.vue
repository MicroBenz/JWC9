<template>
  <div>
    <h1 class="text-center"><span style="font-family: 'ThaiSans Neue'">คำถามประจำสาขา</span> Design</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">1. จงออกแบบผู้กล้าในรูปแบบที่ตัวเองชื่นชอบมา 1 ตัวละคร โดยไม่จำกัดไอเดีย และ สามารถใช้โปรแกรมอะไรก็ได้ เมื่อเสร็จให้อัพโหลดไฟล์ที่บนเว็บไซต์ ด้วยนามสกุลไฟล์เป็น .png .jpg หรือ .gif ก็ได้โดยขนาดไม่เกิน 2 MB.
                        </label>
                        <input type="file">
                      <label>จงอธิบายรูปภาพที่ได้ออกแบบมา</label>
                        <br>
                        <textarea v-model="designAns1X" style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">2. จงบอกชื่อเว็บไซต์ที่น้องชื่นชอบดีไซต์มากที่สุด เพราะอะไร และน้องชอบส่วนไหนของเว็บนั้นมากที่สุด และอยากจะแก้ไข ปรับปรุงส่วนไหนมากที่สุด</label>
                        <br>
                        <textarea v-model="designAns2X" style="width:100%;"></textarea>
                    </div>    
                </div>
            </div>
            <!--<img v-on:click="goBack()" class="back-btn" src="../left-btn.png">  
            <img v-on:click="goNext()" class="next-btn" src="../right-btn.png">   -->
            <!--<img v-on:click="submitAnswer()" class="send-btn" src="./answer.png">   -->
            <a class="next-btn" v-on:click="goNext()">
                <i class="fa fa-angle-right" />
            </a>
            <a class="back-btn" v-on:click="goBack()">
                <i class="fa fa-angle-left" />
            </a>
            <!--<router-link to="/" class="back-to-menu">กลับสู่หน้าหลัก</router-link>-->
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
            designAns1X: this.$store.getters.designAns1,
            designAns2X: this.$store.getters.designAns2,
        }
    },
    computed: mapGetters({
        designAns1: 'designAns1',
        designAns2: 'designAns2'
    }),
    mounted() {
        
        
    },
    updated() {
        
    },
    methods: {
        goNext(){
            this.$store.dispatch('setDataStep5Design',{
                designAns1: this.designAns1X,
                designAns2: this.designAns2X
            })
            // TODO : api upload file !!!!!
            axios.defaults.headers.common['Authorization'] = 'Bearer '+this.$store.getters.accessToken;
            axios({
                method: 'post',
                url:'/api/questions',
                data:[
                    {
                        QuestionID: '7',
                        AnswerText: this.designAns1X 
                     },
                     {
                        QuestionID: '8',
                        AnswerText: this.designAns2X 
                     }
                ]
            }).then((response) => {
                console.log(response.data);
                if(response.data.status == 'OK'){
                    this.$router.push('/register/step6');
                }
                else{
                    console.log('something error in calling api in step5-marketing')
                }
                
            })
        },
        goBack() {
            this.$router.push('/register/step4');
        }
    }
  }
</script>
<style lang="scss" scoped>
@import '../../../../sass/_variables.scss';
    /*.bootstrap-select ul.dropdown-menu li:first-child {
        display: none;
    }*/
    /*input[type=text] {
        line-height: 18px;
    }

    input[type=submit] {
        line-height: 18px;
    }*/
    textarea {
        @include registerTextArea();
    }
    input[type="text"]{
        /*padding: 20px 10px; 
        line-height: 10px !important;*/
        height:1.5em;
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
        font-family: 'Tw Cen MT';
    }
    // .text-center {
    //     @media(max-width: 768px) {
    //         // font-size: 35px;
    //         font-size: 40px;
    //         padding-bottom: 65px;
    //     }
    //     @media only screen 
    //     and (min-device-width : 768px) 
    //     and (max-device-width : 1024px)  {
    //         font-size: 70px;
    //         padding-bottom: 70px;
    //     }
    // }
</style>
