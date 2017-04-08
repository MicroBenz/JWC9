<template>
  <div>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">1. สมมุติว่า ถ้าหากวันนี้น้องบังเอิญเก็บไอเท็มลับในตำนานอยู่ในถ้ำลับ ซึ่งไอเท็มนั้นยังไม่มีใครเคยพบเจอ และ ไม่รู้จักมาก่อน จงบอกชื่อไอเท็มที่น้องพบเจอและ จงตั้งราคาของไอเท็มนี้ และจะนำเสนอขายไอเท็มนี้อย่างไร ( ไม่จำกัดไอเดีย ) 
                        </label>
                        <br>
                        <textarea style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">2. น้องจะทำอย่างไร ถ้าน้องเป็นเจ้าของเว็บไซต์เกี่ยวกับเกมส์ นักรบที่เปิดเป็นวันแรก น้องจะมีวิธีการนำเสนอเว็บไซต์อย่างไร เพื่อที่จะดึงคนเข้าชมเว็บไซต์ พร้อมเหตุผล
                        ( ไม่จำกัดไอเดีย ) 
                        </label>
                        <br>
                        <textarea style="width:100%;"></textarea>
                    </div>    
                </div>
            </div>
        </div>
        <img v-on:click="goBack()" class="back-btn" src="../left-btn.png">  
        <img v-on:click="submitAnswer()" class="send-btn" src="./answer.png">      
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
