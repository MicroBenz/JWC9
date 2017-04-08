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
        <img v-on:click="goBack()" class="back-btn" src="./left-btn.png">
        <img v-on:click="goNext()" class="next-btn" src="./right-btn.png">
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
            // TODO : submit to api
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
            console.log(`selectedRole: ${this.$store.getters.selectedRole}`);
        },
        goBack() {
            this.$router.push('/register/step3');
        }
    }
  }
</script>
<style scoped>
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
        border-radius: 12px;
        border-color: black;
        padding: 5px 10px;
        color: black;
    }
    input[type="text"]{
        /*padding: 20px 10px; 
        line-height: 10px !important;*/
        height:1.5em;
        border: 1px solid white;
        background-color: transparent;
        border-radius: 20px;
        color: white;
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
    .back-btn {
        width: 50px;
        position: absolute;
        bottom: -25px;
        left: 35px;
        cursor: pointer;        
    }
    .next-btn {
        width: 50px;
        position: absolute;
        bottom: -25px;
        right: 35px;
        cursor: pointer;
    }
</style>
