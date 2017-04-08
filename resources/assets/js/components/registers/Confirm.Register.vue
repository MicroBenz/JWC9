<template>
  <div>
    <h1 class="text-center">Check & Confirm</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">                
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Profile</h3>
                        <ul>
                            <li>
                                <p><b>ชื่อ (ภาษาไทย): </b>{{firstnameTHX}}</p>
                            </li>
                            <li>
                                <p><b>นามสกุล (ภาษาไทย): </b>{{lastnameTHX}}</p>
                            </li>
                            <li>
                                <p><b>ชื่อ (ภาษาอังกฤษ): </b>{{firstnameENX}}</p>
                            </li>
                            <li>
                                <p><b>นามสกุล (ภาษาอังกฤษ): </b>{{lastnameENX}}</p>
                            </li>
                            <li>
                                <p><b>ชื่อเล่น: </b>{{nicknameX}}</p>
                            </li>
                            <li>
                                <p><b>เพศ: </b>{{sexX}}</p>
                            </li>
                            <li>
                                <p><b>ศาสนา: </b>{{religionX}}</p>
                            </li>
                            <li>
                                <p><b>กรุ๊ปเลือด: </b>{{bloodTypeX}}</p>
                            </li>
                            <li>
                                <p><b>วันเกิด: </b>{{birthdateX}}</p>
                            </li>
                            <li>
                                <p><b>จังหวัดที่อาศัยอยู่: </b>{{provinceX}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h3>Contact</h3>
                        <ul>
                            <li>
                                <p><b>เบอร์โทรศัพท์ติดต่อ: </b>{{telephoneX}}</p>
                            </li>
                            <li>
                                <p><b>อีเมล: </b>{{emailX}}</p>
                            </li>
                            <li>
                                <p><b>ชื่อผู้ปกครอง: </b>{{emergencyFirstnameX}}</p>
                            </li>
                            <li>
                                <p><b>นามสกุลผู้ปกครอง: </b>{{emergencyLastnameX}}</p>
                            </li>
                            <li>
                                <p><b>เบอร์โทรศัพท์ติดต่อ(ผู้ปกครอง): </b>{{emergencyTelephoneX}}</p>
                            </li>
                            <li>
                                <p><b>เกี่ยวข้องเป็น: </b>{{emergencyRelationshipX}}</p>
                            </li>
                            <li>
                                <p><b>รู้จักค่ายผ่านช่องทางไหน?: </b>{{jwcDiscoveryChannelX}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h3>Other</h3>
                        <ul>
                            <li>
                                <p><b>โรงเรียนที่อยู่: </b>{{schoolX}}</p>
                            </li>
                            <li>
                                <p><b>ระดับชั้น: </b>{{educationLevelX}}</p>
                            </li>
                            <li>
                                <p><b>สายการเรียน: </b>{{educationMajorX}}</p>
                            </li>
                            <li>
                                <p><b>ไซส์เสื้อ: </b>{{shirtSizeX}}</p>
                            </li>
                            <li>
                                <p><b>โรคประจำตัว: </b>{{allergyX}}</p>
                            </li>
                            <li>
                                <p><b>อาหารที่รับประทาน: </b>{{foodTypeX}}</p>
                            </li>
                            <li>
                                <p><b>อาหารที่แพ้/ไม่สามารถรับประทานได้: </b>{{foodAllergicX}}</p>
                            </li>
                            <li>
                                <p><b>ยาที่แพ้: </b>{{drugAllergicX}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h3>คำถามส่วนกลาง</h3>
                        <ul>
                            <li>
                                <p><b>ทำไมถึงอยากจะมาเข้าค่าย JWC และคาดหวังอะไรจากค่าย ในครั้งนี้ ? : </b> <br>{{generalAns1X}}</p>
                            </li>
                            <li>
                                <p><b>เว็บไซต์อะไรที่น้องอยากสร้างในอนาคต พร้อมเหตุผล : </b> <br>{{generalAns2X}}</p>
                            </li>
                            <li>
                                <p><b>เล่าประสบการณ์ กิจกรรมและผลงานของน้อง : </b> <br>{{generalAns3X}}</p>
                            </li>
                            <li>
                                <p><b>เล่าความสามารถพิเศษของน้อง : </b> <br>{{generalAns4X}}</p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <h3 v-if="selectedRoleX ==='marketing'">คำถาม Marketing</h3>
                        <h3 v-else-if="selectedRoleX ==='content'">คำถาม Content</h3>
                        <h3 v-else-if="selectedRoleX ==='design'">คำถาม Design</h3>
                        <ul v-if="selectedRoleX ==='marketing'">
                            <li>
                                <p><b>สมมุติว่า ถ้าหากวันนี้น้องบังเอิญเก็บไอเท็มลับในตำนานอยู่ในถ้ำลับ ซึ่งไอเท็มนั้นยังไม่มีใครเคยพบเจอ และ ไม่รู้จักมาก่อน จงบอกชื่อไอเท็มที่น้องพบเจอและ จงตั้งราคาของไอเท็มนี้ และจะนำเสนอขายไอเท็มนี้อย่างไร ( ไม่จำกัดไอเดีย ): </b> <br>{{marketingAns1X}}</p>
                            </li>
                            <li>
                                <p><b>น้องจะทำอย่างไร ถ้าน้องเป็นเจ้าของเว็บไซต์เกี่ยวกับเกมส์ นักรบที่เปิดเป็นวันแรก น้องจะมีวิธีการนำเสนอเว็บไซต์อย่างไร เพื่อที่จะดึงคนเข้าชมเว็บไซต์ พร้อมเหตุผล ( ไม่จำกัดไอเดีย ): </b> <br>{{marketingAns2X}}</p>
                            </li>
                        </ul>
                        <ul v-else-if="selectedRoleX ==='content'">
                            <li>
                                <p><b>สมมุติว่ามีนักรบกำลังจะออกเดินทางไปช่วยเจ้าหญิงที่ปราสาทของบอส ซึ่งสามารถหยิบของได้เพียง 3 ชิ้นเท่านั้น น้องจะเลือกหยิบอะไรไป เพราะอะไร และจงเล่าเรื่องราวการการผจญภัยเพื่อไปช่วยเจ้าหญิงจากตัวร้าย ( ไม่จำกัดไอเดีย ): </b> <br>{{contentAns1X}}</p>
                            </li>
                            <li>
                                <p><b>จากเรื่องที่แต่งมา จงย่อให้เหลืออย่างน้อย 120 คำและไม่เกิน 150 คำ: </b> <br>{{contentAns2X}}</p>
                            </li>
                        </ul>
                        <ul v-else-if="selectedRoleX ==='design'">
                            <li>
                                <p><b>จงออกแบบนักรบในรูปแบบที่ตัวเองชื่นชอบมา 1 ตัวละคร โดยไม่จำกัดไอเดีย และ สามารถใช้โปรแกรมอะไรก็ได้ เมื่อเสร็จให้อัพโหลดไฟล์ที่บนเว็บไซต์ ด้วยนามสกุลไฟล์เป็น .png .jpg หรือ .gif ก็ได้โดยขนาดไม่เกิน 2 MB. และ จงอธิบายรูปภาพที่ได้ออกแบบมา: </b> <br>{{designAns1X}}</p>
                            </li>
                            <li>
                                <p><b>จงบอกชื่อเว็บไซต์ที่น้องชื่นชอบดีไซต์มากที่สุด เพราะอะไร และน้องชอบส่วนไหนของเว็บนั้นมากที่สุด และอยากจะแก้ไข ปรับปรุงส่วนไหนมากที่สุด: </b> <br>{{designAns2X}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--<img v-on:click="goNext()" class="next-btn" src="./right-btn.png">-->
        <img v-on:click="goBack()" class="back-btn" src="./left-btn.png">     
        <img v-on:click="submitAnswer()" class="send-btn" src="./roles/answer.png">         
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
            //lock database
            var component = this;
            axios({
                method: 'get',
                url:'/api/register/complete',
            }).then((response) => {
                console.log('!!!!Lock!!!!!');
                console.log(response.data)
                
                if(response.data.status == "OK"){
                    // TODO : pop router stack till empty
                    component.$router.push('/')
                    component.$router.push('/register/step7')
                }
                else{
                    console.log('something went wrong while locking')
                }
                
            })

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
