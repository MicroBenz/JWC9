<template>
  <div>
    <h1 class="text-center">Profile</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <img src="/img/profile-thumb.png" class="center-block img-circle img-thumbnail"  width="70%" height="auto" >
                <div style="text-align:center;">
                    <input type="file" id="files" class="hidden"/>
                    <label for="files">
                        <img class="upload-btn" src="./upload.png">
                    </label>
                </div>
                
            </div>
            <div class="questionsDiv col-xs-12 col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">ชื่อ (ภาษาไทย)</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">นามสกุล (ภาษาไทย)</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">ชื่อ (ภาษาอังกฤษ)</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">นามสกุล (ภาษาอังกฤษ)</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="thai-name">ชื่อเล่น</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="sel1">เพศ</label>
                        <div class="select-wrapper">                        
                            <select class="form-control setHeight" id="selSex">
                                <option value="" selected disabled>เลือก</option>
                                <option>ชาย</option>
                                <option>หญิง</option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="thai-name">ศาสนา</label>
                        <div class="select-wrapper">                        
                            <select class="form-control setHeight" id="selBelieve">
                                <option value="" selected disabled>เลือก</option>
                                <option>พุทธ</option>
                                <option>คริสต์</option>
                                <option>อิสลาม</option>
                                <option>พราหมณ์</option>
                                <option>อื่น ๆ </option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-xs-6 col-sm-6 col-md-3 form-group">
                        <label for="thai-name">กรุ๊ปเลือด</label>
                        <div class="select-wrapper">
                            <select class="form-control setHeight" id="selBlood">
                                <option value="" selected disabled>เลือก</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">วันเกิด</label>
                        <div class="form-group">
                            <input type="date" name="bday">
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                        <label for="thai-name">จังหวัดที่อาศัยอยู่</label>
                        <div class="select-wrapper">                        
                            <select class="form-control setHeight" id="selProvince">
                                <option value="" selected disabled>เลือก</option>
                                <option>กระบี่</option>
                                <option>กรุงเทพมหานคร</option>
                                <option>กาญจนบุรี</option>
                                <option>กาฬสินธุ์</option>
                                <option>กำแพงเพชร</option>
                                <option>ขอนแก่น</option>
                                <option>จันทบุรี</option>
                                <option>ฉะเชิงเทรา</option>
                                <option>ชลบุรี</option>
                                <option>ชัยนาท</option>
                                <option>ชัยภูมิ</option>
                                <option>ชุมพร</option>
                                <option>ตรัง</option>
                                <option>ตราด</option>
                                <option>ตาก</option>
                                <option>นครนายก</option>
                                <option>นครปฐม</option>
                                <option>นครพนม</option>
                                <option>นครราชสีมา</option>
                                <option>นครศรีธรรมราช</option>
                                <option>นครสวรรค์</option>
                                <option>นนทบุรี</option>
                                <option>นราธิวาส</option>
                                <option>น่าน</option>
                                <option>บึงกาฬ</option>
                                <option>บุรีรัมย์</option>
                                <option>ปทุมธานี</option>
                                <option>ประจวบคีรีขันธ์</option>
                                <option>ปราจีนบุรี</option>
                                <option>ปัตตานี</option>
                                <option>พระนครศรีอยุธยา</option>
                                <option>พะเยา</option>
                                <option>พังงา</option>
                                <option>พัทลุง</option>
                                <option>พิจิตร</option>
                                <option>พิษณุโลก</option>
                                <option>ภูเก็ต</option>
                                <option>มหาสารคาม</option>
                                <option>มุกดาหาร</option>
                                <option>ยะลา</option>
                                <option>ยโสธร</option>
                                <option>ระนอง</option>
                                <option>ระยอง</option>
                                <option>ราชบุรี</option>
                                <option>ร้อยเอ็ด</option>
                                <option>ลพบุรี</option>
                                <option>ลำปาง</option>
                                <option>ลำพูน</option>
                                <option>ศรีสะเกษ</option>
                                <option>สกลนคร</option>
                                <option>สงขลา</option>
                                <option>สตูล</option>
                                <option>สมุทรปราการ</option>
                                <option>สมุทรสงคราม</option>
                                <option>สมุทรสาคร</option>
                                <option>สระบุรี</option>
                                <option>สระแก้ว</option>
                                <option>สิงห์บุรี</option>
                                <option>สุพรรณบุรี</option>
                                <option>สุราษฎร์ธานี</option>
                                <option>สุรินทร์</option>
                                <option>สุโขทัย</option>
                                <option>หนองคาย</option>
                                <option>หนองบัวลำภู</option>
                                <option>อำนาจเจริญ</option>
                                <option>อุดรธานี</option>
                                <option>อุตรดิตถ์</option>
                                <option>อุทัยธานี</option>
                                <option>อุบลราชธานี</option>
                                <option>อ่างทอง</option>
                                <option>เชียงราย</option>
                                <option>เชียงใหม่</option>
                                <option>เพชรบุรี</option>
                                <option>เพชรบูรณ์</option>
                                <option>เลย</option>
                                <option>แพร่</option>
                                <option>แม่ฮ่องสอน</option>
                            </select>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <img v-on:click="goNext()" class="next-btn" src="./right-btn.png">
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
        
        
    },
    updated() {
        console.log('updated')
        
    },
    methods: {
        goNext() {
            this.$router.push('/register/step2');
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
    .img-thumbnail {
        margin-bottom: 15px;
    }
    .upload-btn {
        width: 60%;
    }
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
        position: absolute;
        bottom: -25px;
        right: 35px;
        cursor: pointer;
    }
</style>
