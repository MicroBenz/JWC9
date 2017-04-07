<template>
  <div>
    <h1 class="text-center">Contact</h1>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">เบอร์โทรศัพท์ติดต่อ</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">อีเมล</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">ชื่อผู้ปกครอง</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">นามสกุลผู้ปกครอง</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">เบอร์โทรศัพท์ติดต่อ</label>
                        <input type="text" class="form-control" id="thai-name">
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="sel1">เกี่ยวข้องเป็น</label>
                        <select class="form-control setHeight" id="selSex">
                            <option value="" selected disabled>เลือก</option>
                            <option>บิดา</option>
                            <option>มารดา</option>
                        </select>
                    </div>    
                    <div class="col-xs-12 col-sm-6 col-md-6 form-group">
                        <label for="thai-name">รู้จักค่ายผ่านช่องทางไหน?</label>
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
