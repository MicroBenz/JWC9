<template>
  <div>
    <h1 class="text-center">Check & Confirm</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">                
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <h3>Profile</h3>
                        <ul>
                            <li>
                                <p><b>ชื่อ (ภาษาไทย): </b>{{ res.profile.FirstName }}</p>
                            </li>
                            <li>
                                <p><b>นามสกุล (ภาษาไทย): </b>{{ res.profile.LastName }}</p>
                            </li>
                            <li>
                                <p><b>ชื่อ (ภาษาอังกฤษ): </b>{{ res.profile.FirstNameEN }}</p>
                            </li>
                            <li>
                                <p><b>นามสกุล (ภาษาอังกฤษ): </b>{{ res.profile.LastNameEN }}</p>
                            </li>
                            <li>
                                <p><b>ชื่อเล่น: </b>{{ res.profile.Nickname }}</p>
                            </li>
                            <li>
                                <p><b>เพศ: </b>{{ (res.profile.Gender == 'M')? 'ชาย' : 'หญิง' }}</p>
                            </li>
                            <li>
                                <p><b>ศาสนา: </b>{{ res.profile.Religion }}</p>
                            </li>
                            <li>
                                <p><b>กรุ๊ปเลือด: </b>{{ res.profile.BloodType }}</p>
                            </li>
                            <li>
                                <p><b>วันเกิด: </b>{{ res.profile.Birthday }}</p>
                            </li>
                            <li>
                                <p><b>จังหวัดที่อาศัยอยู่: </b>{{ res.profile.ProvinceName }}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <img :src="res.profile.ProfilePicture" style="max-width: 100%;">
                        <div v-if="res.profile.ProfilePicture === '/storage/'" style="background: #ddd; min-height:200px; padding-top: 20px;">
                            คุณยังไม่ได้อัพโหลดรูปประจำตัว<br>
                            กรุณาย้อนกลับไปอัพโหลดที่ขั้นตอนที่ 1
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3>Contact</h3>
                        <ul>
                            <li>
                                <p><b>เบอร์โทรศัพท์ติดต่อ: </b>{{ res.profile.Telephone }}</p>
                            </li>
                            <li>
                                <p><b>อีเมล: </b>{{ res.profile.Email }}</p>
                            </li>
                            <li>
                                <p><b>ผู้ปกครอง: </b>{{ res.profile.EmergencyContact }}</p>
                            </li>
                            <li>
                                <p><b>เบอร์โทรศัพท์ติดต่อ(ผู้ปกครอง): </b>{{ res.profile.EmergencyTel }}</p>
                            </li>
                            <li>
                                <p><b>เกี่ยวข้องเป็น: </b>{{ res.profile.EmergencyRelation }}</p>
                            </li>
                            <li>
                                <p><b>รู้จักค่ายผ่านช่องทางไหน?: </b>{{ res.profile.JWCDiscoveryChannel }}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h3>Other</h3>
                        <ul>
                            <li>
                                <p><b>โรงเรียนที่จบการศึกษาชั้นล่าสุด: </b>{{ res.profile.SchoolName }}</p>
                            </li>
                            <li>
                                <p><b>ระดับชั้นที่จบ: </b>{{ res.profile.EducationLevel }}</p>
                            </li>
                            <li>
                                <p><b>สายการเรียน: </b>{{ res.profile.EducationMajor }}</p>
                            </li>
                            <li>
                                <p><b>ไซส์เสื้อ: </b>{{ res.profile.ShirtSize }}</p>
                            </li>
                            <li>
                                <p><b>โรคประจำตัว: </b>{{ res.profile.ShirtSize }}</p>
                            </li>
                            <li>
                                <p><b>อาหารที่รับประทาน: </b>{{ res.profile.FoodType }}</p>
                            </li>
                            <li>
                                <p><b>อาหารที่แพ้/ไม่สามารถรับประทานได้: </b>{{ res.profile.FootAllergic }}</p>
                            </li>
                            <li>
                                <p><b>ยาที่แพ้: </b>{{ res.profile.DrugAllergic }}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h3>คำถามส่วนกลาง</h3>
                        <ul>
                            <li>
                                <p><b>ทำไมถึงอยากจะมาเข้าค่าย JWC และคาดหวังอะไรจากค่าย ในครั้งนี้ ? : </b> <br>{{ answer.central[0].answer }}</p>
                            </li>
                            <li>
                                <p><b>เว็บไซต์อะไรที่น้องอยากสร้างในอนาคต พร้อมเหตุผล : </b> <br>{{ answer.central[1].answer }}</p>
                            </li>
                            <li>
                                <p><b>เล่าประสบการณ์ กิจกรรมและผลงานของน้อง : </b> <br>{{ answer.central[2].answer }}</p>
                            </li>
                            <li>
                                <p><b>เล่าความสามารถพิเศษของน้อง : </b> <br>{{ answer.central[3].answer }}</p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h3 v-if="selectedRoleX ==='marketing'">คำถาม Marketing</h3>
                        <h3 v-else-if="selectedRoleX ==='content'">คำถาม Content</h3>
                        <h3 v-else-if="selectedRoleX ==='design'">คำถาม Design</h3>
                        <ul v-if="selectedRoleX ==='marketing'">
                            <li>
                                <p><b>{{ answer.marketing[0].QuestionText }}: </b> <br>{{ answer.marketing[0].answer }}</p>
                            </li>
                            <li>
                                <p><b>{{ answer.marketing[1].QuestionText }}: </b> <br>{{ answer.marketing[1].answer }}</p>
                            </li>
                        </ul>
                        <ul v-else-if="selectedRoleX ==='content'">
                            <li>
                                <p><b>{{ answer.content[0].QuestionText }}: </b> <br>{{ answer.content[0].answer }}</p>
                            </li>
                            <li>
                                <p><b>{{ answer.content[1].QuestionText }}: </b> <br>{{ answer.content[1].answer }}</p>
                            </li>
                        </ul>
                        <ul v-else-if="selectedRoleX ==='design'">
                            <li>
                                <p><b>{{ answer.design[0].QuestionText }}: </b> <br>
                                    <span style="color: red; font-weight: bold; text-decoration: underline;" v-if="answer.design[0].answer.attachment === '/storage/'">ยังไม่ได้อัพโหลดรูปตัวละคร</span>
                                    <img style="width: 100%; max-width: 500px;" v-if="answer.design[0].answer.attachment != '/storage/'" :src="answer.design[0].answer.attachment"> <br>{{ answer.design[0].answer.text }}</p>
                            </li>
                            <li>
                                <p><b>{{ answer.design[1].QuestionText }}: </b> <br>{{ answer.design[1].answer }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--<img v-on:click="goNext()" class="next-btn" src="./right-btn.png">-->
        <!--<img v-on:click="goBack()" class="back-btn" src="./left-btn.png">     -->
        <!--<img v-on:click="submitAnswer()" class="send-btn" src="./roles/answer.png">         -->
        <a class="back-btn" v-on:click="goBack()">
            <i class="fa fa-angle-left" />
        </a>
        <a class="btn-game btn-game-wrapper">
            <div class="btn-game" v-on:click="submitAnswer()">ส่งคำตอบ</div>
        </a>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import axios from 'axios'
  export default {
    data(){
        return {
            res: {},
            answer: {
                central: {},
                design: {},
                content: {},
                marketing: {},
            },

            selectedRoleX: this.$store.getters.selectedRole,
            firstnameENX: this.$store.getters.firstnameEN,
            lastnameENX: this.$store.getters.lastnameEN,
            firstnameTHX: this.$store.getters.firstnameTH,
            lastnameTHX: this.$store.getters.lastnameTH,
            nicknameX: this.$store.getters.nickname,
            profilePicture: this.$store.getters.profilePicture,
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
        profilePicture: 'profilePicture',
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
    beforeMount () {
    },
    mounted() {
        let component = this
        console.log('fetching data from server')
        axios.get('/api/register/data').then(function (res) {
            console.log(res.data)
            component.res = res.data
        })
        axios.get('/api/questions/central').then(function (res) {
            console.log(res.data)
            component.answer.central = res.data
        })
        axios.get('/api/questions/design').then(function (res) {
            console.log(res.data)
            component.answer.design = res.data
        })
        axios.get('/api/questions/content').then(function (res) {
            console.log(res.data)
            component.answer.content = res.data
        })
        axios.get('/api/questions/marketing').then(function (res) {
            console.log(res.data)
            component.answer.marketing = res.data
        })

    },
    updated() {
        console.log('updated')
    },
    methods: {
        submitAnswer() {
            //lock database
            var component = this;
            let reallyConfirm = confirm('หากยืนยันการสมัครแล้วจะไม่สามารถแก้ไขข้อมูลได้, ยืนยันการสมัคร?')
            if(reallyConfirm){
                axios.post('/api/register/complete').then((response) => {
                    console.log('!!!!Lock!!!!!');
                    console.log(response.data)

                    if(response.data.status == "OK"){
                        // TODO : pop router stack till empty
                        component.$router.push('/')
                        component.$router.push('/register/success')
                    }
                    else{
                        console.log('something went wrong while locking')
                    }

                })
            }
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
                this.$route.push('/');
            }
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
    .back-btn {
        @include circleButton();
        left: 35px;
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
    .btn-game-wrapper {
        position: absolute;
        bottom: -28px;
        left: 0;
        right: 0;
        max-width: 179px;
        text-align: center;
        font-size: 29px;
        max-width: 240px;
        border-bottom: 5px solid #d7524e;
        .btn-game {
            border-bottom: none;
            &:hover {
                border-bottom: none;
                margin-top: 0px;
            }
        }
    }
    
</style>
