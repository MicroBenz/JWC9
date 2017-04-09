<template>
  <div>
    <h1 class="text-center">คำถามประจำสาขา Content</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">1. สมมุติว่ามีนักรบกำลังจะออกเดินทางไปช่วยเจ้าหญิงที่ปราสาทของบอส ซึ่งสามารถหยิบของได้เพียง 3 ชิ้นเท่านั้น น้องจะเลือกหยิบอะไรไป เพราะอะไร และจงเล่าเรื่องราวการการผจญภัยเพื่อไปช่วยเจ้าหญิงจากตัวร้าย ( ไม่จำกัดไอเดีย )
                        </label>
                        <br>
                        <textarea v-model="contentAns1X" style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">2. จากเรื่องที่แต่งมา จงย่อให้เหลืออย่างน้อย 120 คำและไม่เกิน 150 คำ</label>
                        <br>
                        <textarea v-model="contentAns2X" style="width:100%;"></textarea>
                    </div>    
                </div>
            </div>
        </div>
        <!--<img v-on:click="goBack()" class="back-btn" src="../left-btn.png">-->
        <!--<img v-on:click="goNext()" class="next-btn" src="../right-btn.png">   -->
        <!--<img v-on:click="submitAnswer()" class="send-btn" src="./answer.png">-->
        <a class="next-btn" v-on:click="goNext()">
            <i class="fa fa-angle-right" />
        </a>
        <a class="back-btn" v-on:click="goBack()">
            <i class="fa fa-angle-left" />
        </a>
        <!--<router-link to="/" class="back-to-menu">กลับสู่หน้าหลัก</router-link>-->
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import axios from 'axios'
  export default {
    data(){
        return {
            contentAns1X: this.$store.getters.contentAns1,
            contentAns2X: this.$store.getters.contentAns2,
        }
    },
    computed: mapGetters({
        contentAns1: 'contentAns1',
        contentAns2: 'contentAns2'
    }),
    mounted() {
        
        
    },
    updated() {
        
    },
    methods:{
        goNext(){
            this.$store.dispatch('setDataStep5Content',{
                contentAns1: this.contentAns1X,
                contentAns2: this.contentAns2X,
            })
            axios.defaults.headers.common['Authorization'] = 'Bearer '+this.$store.getters.accessToken;
            axios({
                method: 'post',
                url:'/api/questions',
                data:[
                    {
                        QuestionID: '5',
                        AnswerText: this.contentAns1X 
                     },
                     {
                        QuestionID: '6',
                        AnswerText: this.contentAns2X
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
