<template>
  <div>
    <h1 class="text-center">Other</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">โรงเรียนที่อยู่</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-6 col-sm-3 col-md-3 form-group">
                        <label for="thai-name">ระดับชั้น</label>
                        <select class="form-control setHeight" id="selBelieve">
                            <option value="" selected disabled>เลือก</option>
                            <option>ม.3 ขึ้น ม.4</option>
                            <option>ม.4 ขึ้น ม.5</option>
                            <option>ม.5 ขึ้น ม.6</option>
                            <option>ม.6 ขึ้นปี 1</option>
                            <option>ม.3 ขึ้น ปวช. ปี 1</option>
                            <option>ขึ้น ปวช. ปี 2</option>
                            <option>ขึ้น ปวช. ปี 3</option>
                            <option>ขึ้น ปวส.</option>
                        </select>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 form-group">
                        <label for="thai-name">สายการเรียน</label>
                        <select class="form-control setHeight" id="selBelieve">
                            <option value="" selected disabled>เลือก</option>
                            <option>วิทย์ - คณิต</option>
                            <option>ศิลป์- คำนวน</option>
                            <option>ศิลป์- ภาษา</option>
                            <option>วิทย์ - คอม</option>
                            <option>ศิลป์ - สังคม</option>
                        </select>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 form-group">
                        <label for="thai-name">ไซส์เสื้อ</label>
                        <select class="form-control setHeight" id="selBelieve">
                            <option value="" selected disabled>เลือก</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9 form-group">
                        <label for="thai-name">โรคประจำตัว</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="sel1">อาหารที่รับประทาน</label>
                        <select class="form-control setHeight" id="selSex">
                            <option value="" selected disabled>เลือก</option>
                            <option>ปกติ</option>
                            <option>เจ</option>
                            <option>อิสลาม</option>
                            <option>มังสวิรัต</option>
                        </select>
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">อาหารที่แพ้/ไม่สามารถรับประทานได้</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">ยาที่แพ้</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                </div>
            </div>
            <div class="col-xs-12">
                <img src="/images/join-button.png" class="center-block pull-right nextButton" alt="Cinque Terre" width="20%;" height="auto">
            </div>
        </div>
        
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
        
        
    },
    updated() {
        console.log('updated')
        
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
    }
    .questionsDiv{
        padding-left: 10%;
        padding-right: 10%;
    }
</style>
