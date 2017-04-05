<template>
  <div>
    <div class="questionContainer">
        <div class="row">
            <div class="questionsDiv col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">1. สมมุติว่ามีนักรบกำลังจะออกเดินทางไปช่วยเจ้าหญิงที่ปราสาทของบอส ซึ่งสามารถหยิบของได้เพียง 3 ชิ้นเท่านั้น น้องจะเลือกหยิบอะไรไป เพราะอะไร และจงเล่าเรื่องราวการการผจญภัยเพื่อไปช่วยเจ้าหญิงจากตัวร้าย ( ไม่จำกัดไอเดีย )
</label>
                        <br>
                        <textarea style="width:100%;"></textarea>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                        <label for="thai-name">2. จากเรื่องที่แต่งมา จงย่อให้เหลืออย่างน้อย 120 คำและไม่เกิน 150 คำ</label>
                        <br>
                        <textarea style="width:100%;"></textarea>
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
        background: white;
        color: black;
        border-radius: 15px;
        padding-bottom: 1em;
        padding-top: 1em;
    }
    .questionsDiv{
        padding-left: 10%;
        padding-right: 10%;
    }
</style>
