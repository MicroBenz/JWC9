<template>
  <div>
    <h1 class="text-center">คำถามส่วนกลาง</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">1. ทำไมถึงอยากจะมาเข้าค่าย JWC และคาดหวังอะไรจากค่าย ในครั้งนี้ ?</label>
                        <br>
                        <textarea v-model="generalAns1X" style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">2. เว็บไซต์อะไรที่น้องอยากสร้างในอนาคต พร้อมเหตุผล</label>
                        <br>
                        <textarea v-model="generalAns2X" style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">3. เล่าประสบการณ์ กิจกรรมและผลงานของน้อง</label>
                        <br>
                        <textarea v-model="generalAns3X" style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">4. เล่าความสามารถพิเศษของน้อง</label>
                        <br>
                        <textarea v-model="generalAns4X" style="width:100%;"></textarea>
                    </div>      
                </div>
            </div>
        </div>
        <!--<img v-on:click="goBack()" class="back-btn" src="./left-btn.png">
        <img v-on:click="goNext()" class="next-btn" src="./right-btn.png">-->
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
            generalAns1X: this.$store.getters.generalAns1,
            generalAns2X: this.$store.getters.generalAns2,
            generalAns3X: this.$store.getters.generalAns3,
            generalAns4X: this.$store.getters.generalAns4,
        }
    },
    computed: mapGetters({
        generalAns1:'generalAns1',
        generalAns2:'generalAns2',
        generalAns3:'generalAns3',
        generalAns4:'generalAns4',
    }),
    mounted() {
        
        
    },
    updated() {
        console.log('updated')
    },
    methods: {
        goNext() {
            this.$store.dispatch('setDataStep4',{
                generalAns1: this.generalAns1X,
                generalAns2: this.generalAns2X,
                generalAns3: this.generalAns3X,
                generalAns4: this.generalAns4X,
            })
            axios.defaults.headers.common['Authorization'] = 'Bearer '+this.$store.getters.accessToken;
            axios({
                method: 'post',
                url:'/api/questions',
                data:[
                    {
                        QuestionID: '1',
                        AnswerText: this.generalAns1X 
                     },
                     {
                        QuestionID: '2',
                        AnswerText: this.generalAns2X 
                     },
                     {
                        QuestionID: '3',
                        AnswerText: this.generalAns3X 
                     },
                     {
                        QuestionID: '4',
                        AnswerText: this.generalAns4X 
                     }
                ]
            }).then((response) => {
                console.log(response.data);
                if(response.data.status == 'OK'){
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
                    // console.log(`selectedRole: ${this.$store.getters.selectedRole}`);
                }
                else{
                    console.log('something error in calling api in step4')
                }
                
            })
            
        },
        goBack() {
            this.$router.push('/register/step3');
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
    textarea {
        @include registerTextArea();
    }
    input[type="text"]{
        /*padding: 20px 10px; 
        line-height: 10px !important;*/
        @include registerTextbox();
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
    //         padding-bottom: 0px;
    //     }
    // }
</style>
