<template>
  <div>
    <h1 class="text-center">Profile</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <img v-if="img === ''" src="/img/profile-thumb.png" class="center-block img-circle img-thumbnail"  width="70%" height="auto" >
                <img v-else :src="img" class="center-block img-circle img-thumbnail"  width="70%" height="auto" >
                <div style="text-align:center;">
                    <input type="file" id="files" class="hidden" v-on:change="onFileChange"/>
                    <label for="files">
                        <!--<img class="upload-btn" src="./upload.png">-->
                        <a class="btn-game">
                            <div class="btn-game upload-btn">อัพโหลดรูป</div>
                        </a>
                    </label>
                </div>
                
            </div>
            <div class="questionsDiv col-xs-12 col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">ชื่อ (ภาษาไทย)</label>
                        <input v-model="firstnameTHX"  type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">นามสกุล (ภาษาไทย)</label>
                        <input v-model="lastnameTHX" type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">ชื่อ (ภาษาอังกฤษ)</label>
                        <input v-model="firstnameENX"  type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">นามสกุล (ภาษาอังกฤษ)</label>
                        <input v-model="lastnameENX" type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="thai-name">ชื่อเล่น</label>
                        <input v-model="nicknameX" type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="sel1">เพศ</label>
                        <div class="select-wrapper">                        
                            <select v-model="sexX" class="form-control setHeight" id="selSex">
                                <option value="" selected disabled>เลือก</option>
                                <option value="M">ชาย</option>
                                <option value="F">หญิง</option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="thai-name">ศาสนา</label>
                        <div class="select-wrapper">                        
                            <select v-model="religionX" class="form-control setHeight" id="selBelieve">
                                <option value="" selected disabled>เลือก</option>
                                <option value="buddism">พุทธ</option>
                                <option value="chirst" >คริสต์</option>
                                <option value="islam" >อิสลาม</option>
                                <option value="hindu">พราหมณ์</option>
                                <option value="etc">อื่น ๆ </option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="thai-name">กรุ๊ปเลือด</label>
                        <div class="select-wrapper">
                            <select v-model="bloodTypeX" class="form-control setHeight" id="selBlood">
                                <option value="" selected disabled>เลือก</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">วันเกิด</label>
                        <div class="form-group">
                            <input v-model="birthdateX" type="date" name="bday">
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">จังหวัดที่อาศัยอยู่</label>
                        <div class="select-wrapper">                        
                            <select v-model="provinceX" class="form-control setHeight" id="selProvince">
                                <option value="" selected disabled>เลือก</option>
                                <option value="กระบี่">กระบี่</option>
                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option value="กาญจนบุรี">กาญจนบุรี</option>
                                <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                                <option value="กำแพงเพชร">กำแพงเพชร</option>
                                <option value="ขอนแก่น">ขอนแก่น</option>
                                <option value="จันทบุรี">จันทบุรี</option>
                                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                <option value="ชลบุรี">ชลบุรี</option>
                                <option value="ชัยนาท">ชัยนาท</option>
                                <option value="ชัยภูมิ">ชัยภูมิ</option>
                                <option value="ชุมพร">ชุมพร</option>
                                <option value="ตรัง">ตรัง</option>
                                <option value="ตราด">ตราด</option>
                                <option value="ตาก">ตาก</option>
                                <option value="นครนายก">นครนายก</option>
                                <option value="นครปฐม">นครปฐม</option>
                                <option value="นครพนม">นครพนม</option>
                                <option value="นครราชสีมา">นครราชสีมา</option>
                                <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                <option value="นครสวรรค์">นครสวรรค์</option>
                                <option value="นนทบุรี">นนทบุรี</option>
                                <option value="นราธิวาส">นราธิวาส</option>
                                <option value="น่าน">น่าน</option>
                                <option value="บึงกาฬ">บึงกาฬ</option>
                                <option value="บุรีรัมย์">บุรีรัมย์</option>
                                <option value="ปทุมธานี">ปทุมธานี</option>
                                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                                <option value="ปัตตานี">ปัตตานี</option>
                                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                <option value="พะเยา">พะเยา</option>
                                <option value="พังงา">พังงา</option>
                                <option value="พัทลุง">พัทลุง</option>
                                <option value="พิจิตร">พิจิตร</option>
                                <option value="พิษณุโลก">พิษณุโลก</option>
                                <option value="ภูเก็ต">ภูเก็ต</option>
                                <option value="มหาสารคาม">มหาสารคาม</option>
                                <option value="มุกดาหาร">มุกดาหาร</option>
                                <option value="ยะลา">ยะลา</option>
                                <option value="ยโสธร">ยโสธร</option>
                                <option value="ระนอง">ระนอง</option>
                                <option value="ระยอง">ระยอง</option>
                                <option value="ราชบุรี">ราชบุรี</option>
                                <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                <option value="ลพบุรี">ลพบุรี</option>
                                <option value="ลำปาง">ลำปาง</option>
                                <option value="ลำพูน">ลำพูน</option>
                                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                <option value="สกลนคร">สกลนคร</option>
                                <option value="สงขลา">สงขลา</option>
                                <option value="สตูล">สตูล</option>
                                <option value="สมุทรปราการ">สมุทรปราการ</option>
                                <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                                <option value="สมุทรสาคร">สมุทรสาคร</option>
                                <option value="สระบุรี">สระบุรี</option>
                                <option value="สระแก้ว">สระแก้ว</option>
                                <option value="สิงห์บุรี">สิงห์บุรี</option>
                                <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                <option value="สุรินทร์">สุรินทร์</option>
                                <option value="สุโขทัย">สุโขทัย</option>
                                <option value="หนองคาย">หนองคาย</option>
                                <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                                <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                                <option value="อุดรธานี">อุดรธานี</option>
                                <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                                <option value="อุทัยธานี">อุทัยธานี</option>
                                <option value="อุบลราชธานี">อุบลราชธานี</option>
                                <option value="อ่างทอง">อ่างทอง</option>
                                <option value="เชียงราย">เชียงราย</option>
                                <option value="เชียงใหม่">เชียงใหม่</option>
                                <option value="เพชรบุรี">เพชรบุรี</option>
                                <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                                <option value="เลย">เลย</option>
                                <option value="แพร่">แพร่</option>
                                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                            </select>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!--<img v-on:click="goNext()" class="next-btn" src="./right-btn.png">-->
        <a class="next-btn" v-on:click="goNext()">
            <i class="fa fa-angle-right" />
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
            firstnameENX:this.$store.getters.firstnameEN,
            lastnameENX: this.$store.getters.lastnameEN,
            firstnameTHX: this.$store.getters.firstnameTH,
            lastnameTHX: this.$store.getters.lastnameTH,
            nicknameX: this.$store.getters.nickname,
            sexX:this.$store.getters.sex,
            religionX:this.$store.getters.religion,
            bloodTypeX:this.$store.getters.bloodType,
            birthdateX:this.$store.getters.birthdate,
            provinceX:this.$store.getters.province,
            img: ''
        }
    },
    computed: mapGetters({
        firstnameEN: 'firstnameEN',
        lastnameEN: 'lastnameEN',
        firstnameTH: 'firstnameTH',
        lastnameTH: 'lastnameTH',
        nickname: 'nickname',
        sex: 'sex',
        religion: 'religion',
        bloodType: 'bloodType',
        birthdate: 'birthdate',
        province: 'province'
    }),
    mounted() {
        
        
    },
    updated() {
        console.log('updated')
        
    },
    methods: {
        goNext() {
            console.log('go next')
            // console.log(this.firstnameENX);
            // console.log(this.lastnameENX);
            // console.log(this.firstnameTHX);
            // console.log(this.lastnameTHX);
            // console.log(this.nicknameX);
            // console.log(this.sexX);
            // console.log(this.religionX);
            // console.log(this.birthdateX);
            // console.log(this.provinceX);
            // console.log(this.bloodTypeX);
            // this.$router.push('/register/step2');
            this.$store.dispatch('setDataStep1', {
                firstnameEN: this.firstnameENX,
                lastnameEN: this.lastnameENX,
                firstnameTH: this.firstnameTHX,
                lastnameTH: this.lastnameTHX,
                nickname: this.nicknameX,
                sex: this.sexX,
                religion: this.religionX,
                birthdate: this.birthdateX,
                province: this.provinceX,
                bloodType: this.bloodTypeX
            })
            axios.defaults.headers.common['Authorization'] = 'Bearer '+this.$store.getters.accessToken;
            
            axios({
                method: 'put',
                url:'/api/register',
                data:{
                    LastName : this.lastnameTHX,
                    FirstName : this.firstnameTHX,
                    LastNameEN : this.lastnameENX,
                    FirstNameEN : this.firstnameENX,
                    Nickname : this.nicknameX,
                    Gender : this.sexX,
                    Religion : this.religionX,
                    BloodType : this.bloodTypeX,
                    Birthday : this.birthdateX,
                    ProvinceName : this.provinceX
                }
            }).then((response) => {
                console.log(response.data);
                if(response.data.status == 'OK'){
                    this.$router.push('/register/step2');
                }
                else{
                    console.log('something error in calling api in step1')
                }
                
            })
        },
        onFileChange(e) {
            const files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            const reader = new FileReader();
            const vm = this;
            reader.onload = function (e) {
                const image = new Image();
                image.onload = () => {
                    console.log('success', image.width, image.height);
                    /*if (image.width / image.height === 1) {
                        vm.img = e.target.result;                        
                    }
                    else {
                        alert('Not square image');
                    }*/
                    console.log(file.size)
                    if(file.size <= 2100000){
                        vm.img = e.target.result;
                    }
                    else{
                        alert('ขนาดไฟล์เกิน 2 MB')
                    }
                }
                image.src = e.target.result;
            };
            reader.readAsDataURL(file);
            axios.post('/api/register/profilepicture', {

            })
        },
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
    .upload-btn {
        border-bottom: none;
    }
    .upload-btn:hover {
        margin-top: 0px;
    }
    .upload-btn {
        font-size: 32px;
        padding-left: 16px;
        padding-right: 16px;
        border-bottom: none;
    }
    .img-thumbnail {
        margin-bottom: 15px;
        @media only screen 
        and (min-device-width : 768px) 
        and (max-device-width : 1024px)  {
            width: 40%;
        }
    }
    // .upload-btn {
    //     width: 60%;
    //     cursor: pointer;
    // }
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
    input[type="date"] {
        padding-left: 15px;
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
        /*padding-left: 10%;*/
        padding-right: 10%;
    }
    @media (max-width: 992px) {
        .questionsDiv{
            padding-left: 10%;
            padding-right: 10%;
        }
    }
    .next-btn {
        width: 50px;
        height: 50px;
        border-radius: 25px;
        background-color: #ee5d5f;
        // border-bottom: 10px solid #d7524e;
        position: absolute;
        bottom: -25px;
        right: 35px;
        cursor: pointer;
        text-align: center;
        i {
            font-size: 35px;
            line-height: 50px;
            color: white;
        }
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
