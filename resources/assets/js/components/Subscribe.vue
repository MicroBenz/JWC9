<template>
    <div>
        <h2 class="subscribe-text">กรอกอีเมลเพื่อติดตามข่าวสาร</h2>
        <div class="form-group subscribe-container">
            <div class="input-group">
                <div class="input-group-addon icon-email">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                <input v-model="email" type="email" class="form-control subscribe" name="email" placeholder="E-Mail">
                <div class="input-group-addon">
                    <div class="icon-subscribe" @click="subscribe()"></div>
                </div>
            </div>
        </div>

        <button id="show-modal-success" style="display: none" data-toggle="modal" data-target="#success"></button>
        <button id="show-modal-fail" style="display: none" data-toggle="modal" data-target="#fail"></button>

        <!-- Modal -->
        <div id="success" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="mail-status">
                        <br>
                        <img src="/img/mail-success.png">
                        <h1 class="status">เสร็จเรียบร้อย !</h1>
                        <p class="context">เตรียมพบกับค่าย JWC ครั้งที่ 9<br>ได้เร็วๆนี้ แล้วพบกันนะ</p>
                        <div class="back" data-dismiss="modal">กลับไปหน้าแรก</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div id="fail" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" style="background: #f15d5f">
                    <div class="mail-status">
                        <br>
                        <img src="/img/mail-fail.png">
                        <h1 class="status">อุ๊ปส์ !</h1>
                        <p class="context">มีบางอย่างผิดพลาด<br>โปรดตรวจสอบอีเมลอีกครั้ง</p>
                        <div class="back fail" data-dismiss="modal">กลับไปหน้าแรก</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<style type="text/css">
    h1.status{
        font-size: 48px;
    }
    p.context{
        font-weight: 100;
    }
    .mail-status{
        width: 70%;
        margin: auto;
    }
    .back{
        border: 1px solid #fff;
        border-radius: 30px;
        margin: auto;
        margin-top: 30px;
        cursor: pointer;
        transition: background, color;
        transition-duration: 0.3s;
        display: table;
        padding: 3px 30px;
    }
    .back:hover{
        background: white;
        color: #62be6f;
    }
    .back.fail:hover{
        color: #f15d5f;
    }
    .modal-content{
        border-radius: 60px;
        padding-top: 30px;
        padding-bottom: 60px;
        max-width: 360px;
        margin: auto;
        font-size: 24px;
        background: #62be6f;
        color: white;
    }
    .input-group-addon{
        background: transparent;
        border: none;
        outline: 0;
    }
    .icon-email{
        color: white;
    }
    .subscribe-container{
        border: 2px solid #FAC621;
        max-width: 400px;
        width: 90%;
        margin: auto;
        border-radius: 20px;
    }
    input.subscribe{
        background: transparent;
        outline: 0;
        border: none;
        box-shadow: none;
        font-size: 20px;
        padding: 5px;
        display: inline-block;
        width: 90%;
        max-width: 360px;
        height: 40px;
        margin: auto;
        color: white;
        transition: none;
    }
    input.subscribe:hover{
        background: transparent;
        outline: 0;
        border: none;
        box-shadow: none;
    }
    input.subscribe::-webkit-input-placeholder{
        color: #ddd;
    }
    .icon-subscribe{
        background: url('/img/button.png');
        background-size: cover;
        width: 25px;
        height: 25px;
        transition: none;
        cursor: pointer;
    }
    .icon-subscribe:hover{
        background-position: 25px;
    }
</style>

<script type="text/javascript">

    export default {
        data() {
            return {
                email: ''
            }
        },
        props: {

        },
        methods: {
            subscribe() {
                let regEx = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i
                if (regEx.test(this.email)){
                    console.log('email validated pass')
                    axios.post('/subscribe', {email: this.email} )
                        .then(function(res){
                            console.log('axios post')
                            $('#show-modal-success').click()
                        })
                        .catch(function(fallback){
                            console.log('axios fall back')
                            $('#show-modal-fail').click()
                        })
                }
                else{
                    console.log('email validated fail')
                    $('#show-modal-fail').click()
                }
            }
        },
        mounted() {

        }
    }

</script>