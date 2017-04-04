<template>
<<<<<<< HEAD
  <!--  <div class="bg-character" style="transform: scale(0.8, 0.8)">
  <div class="containe-fluidr">
    <div class="col-md-3 about-role">
=======
  <div class="container" id="role-selection">
    <div class="col-md-4 about-role">
>>>>>>> origin/front-end
      <h1>Designer</h1>
      <p>Quis ad cillum cupidatat adipisicing. Magna veniam duis minim consectetur aliqua minim aute sit irure occaecat velit. Enim cupidatat nisi aliquip aute et elit ullamco excepteur voluptate dolor ea laborum magna. Quis est ea elit ut proident incididunt ullamco. Laboris ullamco commodo consectetur irure amet anim cillum magna aliquip Lorem. Officia reprehenderit ullamco eu anim labore occaecat amet culpa aute officia excepteur labore. Officia voluptate amet minim ut culpa nostrud quis commodo aliqua laborum ex dolor mollit.</p>
    </div>
    <div style="transform: scale(0.8, 0.8)" class="col-md-4 col-md-offset-1 presenter-stage">
        <div style="background-image: url('img/characters/Light-Design.png" class="presenter-light">
            <img class="presenter-body" src="/img/characters/Human_Design.png">
        </div>
        <div style="width: 300px; height: 80px; background: white; margin: 30px auto;">
            Join
        </div>
    </div>-->
    <!--<div class="col-md-3 col-md-offset-1 role-selector">
      <role-selector
        :role="roleConfig.designer.name"
        :description="roleConfig.designer.shortDescription"
        :imgSrc="roleConfig.designer.imgSrc"
      ></role-selector>
      <role-selector
        :role="roleConfig.content.name"
        :description="roleConfig.content.shortDescription"
        :imgSrc="roleConfig.content.imgSrc"
      ></role-selector>
      <role-selector
        :role="roleConfig.marketing.name"
        :description="roleConfig.marketing.shortDescription"
        :imgSrc="roleConfig.marketing.imgSrc"
      ></role-selector>
    </div>
  </div>
    </div>-->
    <div class="jobs-screen" style="transform: scale(1)">

        <!-- Left Section: Job Description -->
        <div class="section-heading"></div>
        <div class="selected-role-title">DESIGNER</div>
        <div class="selected-role-desc">
            <p class="desc-head">คำอธิบาย</p>
            <p>
                ชื่นชอบการออกแบบและเฉดสีที่หลากหลาย รวมกับจินตนาการที่แปลเปลี่ยนลายเส้น และรูปร่าง พร้อมสามารถนำไปใช้ได้จริง
            </p>
            <p class="desc-head">สกิล</p>
            <p>
                <img class="skill-icon" src="/img/characters/Design_Skill_1.png">
                <img class="skill-icon" src="/img/characters/Design_Skill_2.png">
                <img class="skill-icon" src="/img/characters/Design_Skill_3.png">
            </p>
            <div class="skill-box">
                <div class="skill-name">DESIGN SKILL</div>
                <div class="skill-info">ความเป็นเลิศด้านการออกแบบ</div>
            </div>
        </div>

        <!-- Middle Section: Stage & Presenter -->
        <div class="presenter">
            <img class="presenter-body" src="/img/characters/Human_Design.png">
            <img class="presenter-light" src="/img/characters/Light-Design.png">
            <div class="btn-join">สมัครเลย</div>
        </div>

        <!-- Right Section: Job Selector -->
        <div class="job-picker">
            <img class="job-banner" src="/img/characters/R-DesignButton.png">
            <img class="job-banner" src="/img/characters/R-ContentButton.png">
            <img class="job-banner" src="/img/characters/R-MarketingButton.png">
        </div>
    </div>
</template>

<script>
import RoleSelector from './RoleSelector';
import roleConfig from '../../../configs/role';

export default {
    data () {
        return {
            screenWidth: 1600,
            screenHeight: 900,
            scaleX: 1,
            scaleY: 1
        };
    },
    components: {
        RoleSelector
    },
    mounted () {
        /**
         * Screen Constructor
         */
        this.screenConstruct()
        window.addEventListener('resize', this.screenConstruct)
    },
    methods: {
        /*screenConstruct () {
            let width = $(window).width()
            let height = this.calculateHeightFromWidth(width)

            this.scaleX = this.calculateRatio(width, this.screenWidth)
            this.scaleY = this.calculateRatio(height, this.screenHeight)

            $('.jobs-screen').css('transform', 'scale(' + this.scaleX + ', ' + this.scaleY + ')')
            console.log('scale(' + this.scaleX + ', ' + this.scaleY + ')')
        },
        calculateRatio (current, constant) {
            return current/constant
        },*/

        screenConstruct () {
            let width = $(window).width()
            let height = this.calculateHeightFromWidth(width)
            $('.jobs-screen').css('height', height)
            $('.presenter-body').css('height', height-140)
            $('.presenter-light').css('height', height-70)
        },

        calculateHeightFromWidth (width) {
            let height = width * 0.5625
            return height
        },
    }
}
</script>

<style type="text/css">

/*.jobs-screen{
    width: 100%;
    height: 100%;
    max-width: 1600px;
    max-height: 900px;
    background: url('/img/characters/bg-character.png') no-repeat;
    background-size: cover;
}*/

    .jobs-screen{
        width: 100%;
        background: url('/img/characters/bg-character.png') no-repeat;
        background-size: cover;
        position: relative;
    }

    .presenter{
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
    }

    .presenter-body{
        position: absolute;
        top: 60px;
        max-width: 300px;
        z-index: 120;
        margin: auto;
        left: 0;
        right: 0;
    }

    .presenter-light{
        max-width: 400px;
        z-index: 100;
    }

    .btn-join{
        width: 200px;
        background: #3364a7;
        color: white;
        border-radius: 10px;
        margin: auto;
        margin-top: 10px;
    }

    .job-picker{
        width: 400px;
        left: auto;
        top: 30px;
        right: 30px;
        position: absolute;
    }

    .job-banner{
        width: 400px;
        padding: 15px 30px;
    }

    .selected-role-title{
        position: absolute;
        background: #fdbe00;
        width: 300px;
        font-size: 36pt;
        font-weight: bold;
        font-style: italic;
        top: 140px;
    }

    .selected-role-desc{
        position: absolute;
        top: 240px;
        left: 60px;
        width: 400px;
        font-size: 16pt;
        text-align: left;
        z-index: 140;
    }

    .desc-head{
        font-size: 22pt;
        font-weight: bold;
        color: #fdbe00;
    }

    .skill-icon{
        width: 64px;
        border-radius: 32px;
        border: 5px solid transparent;
        transition: border 0.2s ease;
    }

    .skill-icon:hover, .skill-icon.active{
        border: 5px solid #fdbe00;
    }

    .skill-box{
        margin-top: 10px;
        padding: 10px 30px;
        background: #fdbe00;
    }

    .skill-name{
        font-weight: bold;
        font-size: 24pt;
        line-height: 36px;
    }

    .skill-info{
        color: black;
        font-size: 16pt;
        line-height: 36px;
    }

</style>