<template>
  <div>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">1. จงออกแบบนักรบในรูปแบบที่ตัวเองชื่นชอบมา 1 ตัวละคร โดยไม่จำกัดไอเดีย และ สามารถใช้โปรแกรมอะไรก็ได้ เมื่อเสร็จให้อัพโหลดไฟล์ที่บนเว็บไซต์ ด้วยนามสกุลไฟล์เป็น .png .jpg หรือ .gif ก็ได้โดยขนาดไม่เกิน 2 MB.
                        </label>
                        <input type="file">
                      <label>จงอธิบายรูปภาพที่ได้ออกแบบมา</label>
                        <br>
                        <textarea style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">2. จงบอกชื่อเว็บไซต์ที่น้องชื่นชอบดีไซต์มากที่สุด เพราะอะไร และน้องชอบส่วนไหนของเว็บนั้นมากที่สุด และอยากจะแก้ไข ปรับปรุงส่วนไหนมากที่สุด</label>
                        <br>
                        <textarea style="width:100%;"></textarea>
                    </div>    
                </div>
            </div>
            <img v-on:click="goBack()" class="back-btn" src="../left-btn.png">  
            <img v-on:click="submitAnswer()" class="send-btn" src="./answer.png">   
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
    textarea {
        border-radius: 12px;
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
