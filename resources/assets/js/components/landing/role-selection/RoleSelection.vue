<template>
    <div class="jobs-screen-container">
        <div class="mobile">
            <div class="section-heading">Job Intro</div>
            <div class="section-desc">เลือกอาชีพ</div>
        </div>
        <div class="jobs-screen" style="">

            <!-- Left Section: Job Description -->
            <div class="section-heading">Job Intro</div>
            <div class="section-desc">เลือกอาชีพ</div>
            <div class="selected-role-title">DESIGN</div>
            <div class="selected-role-desc">
                <p class="desc-head">คำอธิบาย</p>
                <p>
                    ชื่นชอบการออกแบบและเฉดสีที่หลากหลาย รวมกับจินตนาการที่แปลเปลี่ยนลายเส้น และรูปร่าง พร้อมสามารถนำไปใช้ได้จริง
                </p>
                <p class="desc-head">สกิล</p>
                <p>
                    <img class="skill-icon active" src="/img/characters/Design_Skill_1.png">
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

            <div class="counter desktop">
                <b style="color: #fac61f;">Design</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count }}</span> คน<br>
                <b style="color: #fac61f;">Content</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count }}</span> คน<br>
                <b style="color: #fac61f;">Marketing</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count }}</span> คน<br>
            </div>
        </div>
        <div class="mobile">
            <div class="selected-role-title">DESIGN</div>
            <div class="selected-role-desc">
                <p class="desc-head">คำอธิบาย</p>
                <p>
                    ชื่นชอบการออกแบบและเฉดสีที่หลากหลาย รวมกับจินตนาการที่แปลเปลี่ยนลายเส้น และรูปร่าง พร้อมสามารถนำไปใช้ได้จริง
                </p>
                <p class="desc-head">สกิล</p>
                <p>
                    <img class="skill-icon active" src="/img/characters/Design_Skill_1.png">
                    <img class="skill-icon" src="/img/characters/Design_Skill_2.png">
                    <img class="skill-icon" src="/img/characters/Design_Skill_3.png">
                </p>
                <div class="skill-box">
                    <div class="skill-name">DESIGN SKILL</div>
                    <div class="skill-info">ความเป็นเลิศด้านการออกแบบ</div>
                </div>
                <div class="counter mobile">
                    <b style="color: #fac61f;">Design</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count }}</span> คน<br>
                    <b style="color: #fac61f;">Content</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count }}</span> คน<br>
                    <b style="color: #fac61f;">Marketing</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count }}</span> คน<br>
                </div>
            </div>
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
            scaleY: 1,
            count: 0
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

        screenConstruct () {
            let width = $(window).width()
            let height = this.calculateHeightFromWidth(width)

            console.log(width)

            $('.jobs-screen').css('height', height)
            $('.presenter-body').css('height', height-140)
            $('.presenter-light').css('height', height-70)
            $('.job-picker').css('top', '')
            if (width <= 1199) {
                $('.jobs-screen').css('height', height+410)
                $('.jobs-screen').css('min-height', height)
                $('.presenter-body').css('height', height-75)
                $('.presenter-light').css('height', height-10)
                $('.job-picker').css('top', height+40)
            }
        },

        calculateHeightFromWidth (width) {
            let height = width * 0.5625
            return height
        },
    }
}
</script>

<style type="text/css">

    .section-heading{
        font-size: 60pt;
        position: absolute;
        font-weight: bold;
        font-style: italic;
        top: 0px;
        line-height: 120px;
        left: 95px;
        text-align: left;
    }

    .section-desc{
        font-size: 24pt;
        position: absolute;
        top: 80px;
        left: 95px;
        text-align: left;
    }

    .jobs-screen{
        width: 100%;
        background: #342327 url('/img/characters/bg-character.png') no-repeat;
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
        border-radius: 30px;
        border-bottom: 5px solid #1a40a7;
        margin: auto;
        margin-top: 10px;
        cursor: pointer;
    }

    .btn-join:hover{
        margin-top: 13px;
        border-bottom: 3px solid #2455a7;
    }

    .job-picker{
        width: 400px;
        left: auto;
        top: 30px;
        right: 30px;
        position: absolute;
        text-align: right;
    }

    .job-banner{
        width: 340px;
        margin-left: auto;
        margin-right: 30px;
        margin-top : 20px;
        margin-bottom: 20px;
        opacity: 0.6;
        display: block;
        transition: opacity, box-shadow;
        transition-duration: 0.3s;
        transition-timing-function: ease;
        cursor: pointer;
    }

    .job-banner:hover, .job-banner.active{
        opacity: 1;
        box-shadow: 0 0 30px #333;
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
        opacity: 0.6;
        cursor: pointer;
    }

    .skill-icon:hover, .skill-icon.active{
        border: 5px solid #fdbe00;
        opacity: 1;
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

    .counter{
        position: absolute;
        top: auto;
        right: 60px;
        bottom: 100px;
        left: auto;
        background: rgba(0,0,0,0.7);
        padding: 15px 30px;
        font-size: 32px;
        border: 2px solid #ddd;
        line-height: 40px;
    }

    .mobile{
        display: none;
    }
    .counter.mobile{
        display: none;
    }

    @media all and (max-width: 1199px){
        .section-heading{
            display: none;
        }
        .section-desc{
            display: none;
        }
        .mobile{
            display: block;
            background: #342327;
        }
        .mobile .section-heading{
            position: static;
            display: block;
        }
        .mobile .section-desc{
            position: static;
            display: block;
        }
        .jobs-screen{
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: top;
        }
        .btn-join{
            position: static;
            margin-top: 20px;
        }
        .btn-join:hover{
            display: none;
        }
        .job-picker{
            left: 0;
            right: 0;
            margin: auto;
            text-align: center;
            width: 80%;
            max-width: 400px;
            margin-top: 30px;
        }
        .job-banner{
            width: 100%;
            max-width: 300px;
            max-height: 100px;
            margin: auto;
            margin-bottom: 10px;
        }
        .selected-role-desc, .selected-role-title{
            display: none;
        }
        .mobile .section-heading{
            font-size: 72px;
            font-style: italic;
            line-height: 52px;
            text-align: center;
            padding-top: 5px;
        }
        .mobile .section-desc{
            line-height: 32px;
            text-align: center;
            padding-bottom: 5px;
        }
        .mobile .selected-role-title{
            top: auto;
            bottom: 480px;
            width: 100%;
            left: 0;
            right: 0;
            padding: 0px;
            position: static;
            display: block;
        }
        .mobile .selected-role-desc{
            top: auto;
            bottom: 60px;
            width: 100%;
            left: 0;
            right: 0;
            padding: 30px;
            position: static;
            display: block;
        }
        .counter.desktop{
            display: none;
        }
        .counter.mobile{
            display: block;
            position: static;
            margin-top: 15px;
            text-align: center;
            background: rgba(0,0,0,0.3)
        }
    }

</style>