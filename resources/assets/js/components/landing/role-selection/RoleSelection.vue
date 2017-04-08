<template>
    <div class="jobs-screen-container">
        <div class="mobile">
            <div class="section-heading">Choose a Job</div>
            <div class="section-desc">เลือกอาชีพ</div>
        </div>
        <div class="jobs-screen" style="">

            <!-- Left Section: Job Description -->
            <div class="section-heading">Choose a Job</div>
            <div class="section-desc">เลือกอาชีพ</div>
            <div class="selected-role-title" v-bind:style="{ background: presentColor }">{{ currentPick }}</div>
            <div class="selected-role-desc">
                <p class="desc-head">คำอธิบาย</p>
                <p>
                    {{ jobDescription }}
                </p>
                <p class="desc-head">สกิล</p>
                <p>
                    <img class="skill-icon active" id="skill-0" @click="activateSkill(skills[0].name, skills[0].desc, 'skill-0', 'skill-m0')" :src="skills[0].icon">
                    <img class="skill-icon" id="skill-1" @click="activateSkill(skills[1].name, skills[1].desc, 'skill-1', 'skill-m1')" :src="skills[1].icon">
                    <img class="skill-icon" id="skill-2" @click="activateSkill(skills[2].name, skills[2].desc, 'skill-2', 'skill-m2')" :src="skills[2].icon">
                </p>
                <div class="skill-box" v-bind:style="{ background: presentColor }">
                    <div class="skill-name">{{ skillName }}</div>
                    <div class="skill-info">{{ skillDesc }}</div>
                </div>
            </div>


        <!-- Middle Section: Stage & Presenter -->
        <div class="presenter">
            <img class="presenter-body" v-bind:src="presenter.body">
            <img class="presenter-light" v-bind:src="presenter.light">
            <div v-on:click="chooseRole()" v-bind:class="{'btn-join':true, 'btn-join-disabled':selectedRole=='none'}" >สมัครเลย</div>
        </div>

        <!-- Right Section: Job Selector -->
        <div class="job-picker">
            <img v-on:click="selectJob('design')" @click="setPresenter('design')" v-bind:class="{'job-banner':true, 'job-banner-selected':selectedRole=='design'}" src="/img/characters/R-DesignButton.png">
            <img v-on:click="selectJob('content')" @click="setPresenter('content')" v-bind:class="{'job-banner':true, 'job-banner-selected':selectedRole=='content'}" src="/img/characters/R-ContentButton.png">
            <img v-on:click="selectJob('marketing')" @click="setPresenter('marketing')" v-bind:class="{'job-banner':true, 'job-banner-selected':selectedRole=='marketing'}" src="/img/characters/R-MarketingButton.png">
        </div>

            <div class="counter desktop">
                <b style="color: #fac61f;">Design</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count.design }}</span> คน<br>
                <b style="color: #3364a7;">Content</b> มีผู้เข้าร่วมแล้ว <span class="color: #3364a7">{{ count.content }}</span> คน<br>
                <b style="color: #f14d50;">Marketing</b> มีผู้เข้าร่วมแล้ว <span class="color: #f14d50">{{ count.marketing }}</span> คน<br>
            </div>
        </div>
        <div class="mobile">
            <div class="selected-role-title" v-bind:style="{ background: presentColor }">{{ currentPick }}</div>
            <div class="selected-role-desc">
                <p class="desc-head">คำอธิบาย</p>
                <p>
                    {{ jobDescription }}
                </p>
                <p class="desc-head">สกิล</p>
                <p>
                    <img class="skill-icon active" id="skill-m0" @click="activateSkill(skills[0].name, skills[0].desc, 'skill-0','skill-m0')" :src="skills[0].icon">
                    <img class="skill-icon" id="skill-m1" @click="activateSkill(skills[1].name, skills[1].desc, 'skill-1', 'skill-m1')" :src="skills[1].icon">
                    <img class="skill-icon" id="skill-m2" @click="activateSkill(skills[2].name, skills[2].desc, 'skill-2', 'skill-m2')" :src="skills[2].icon">
                </p>
                <div class="skill-box" v-bind:style="{ background: presentColor }">
                    <div class="skill-name">{{ skillName }}</div>
                    <div class="skill-info">{{ skillDesc }}</div>
                </div>
                <div class="counter mobile">
                    <b style="color: #fac61f;">Design</b> มีผู้เข้าร่วมแล้ว <span class="color: #fac61f">{{ count.design }}</span> คน<br>
                    <b style="color: #3364a7;">Content</b> มีผู้เข้าร่วมแล้ว <span class="color: #3364a7">{{ count.content }}</span> คน<br>
                    <b style="color: #f14d50;">Marketing</b> มีผู้เข้าร่วมแล้ว <span class="color: #f14d50">{{ count.marketing }}</span> คน<br>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import roleConfig from '../../../configs/role'
import axios from 'axios'

export default {
    data () {
        return {
            selectedRole: 'none',
            screenWidth: 1600,
            screenHeight: 900,
            scaleX: 1,
            scaleY: 1,
            count: {
                design: '?',
                content: '?',
                marketing: '?',
            },
            presenter: {
                body: '/img/characters/Human_Design.png',
                light: '/img/characters/Light-Design.png'
            },
            presentColor: '',
            jobDescription: 'ชื่นชอบการออกแบบและเฉดสีที่หลากหลาย รวมกับจินตนาการที่แปลเปลี่ยนลายเส้น และรูปร่าง พร้อมสามารถนำไปใช้ได้จริง',
            skills: [
                {
                    icon: '/img/characters/Design_Skill_1.png',
                    name: 'DESIGN SKILL',
                    desc: 'ความเป็นเลิศด้านการออกแบบ',
                },
                {
                    icon: '/img/characters/Design_Skill_2.png',
                    name: 'IMAGINATION',
                    desc: 'สามารถสร้างความคิดให้ออกมาเป็นภาพได้',
                },
                {
                    icon: '/img/characters/Design_Skill_3.png',
                    name: 'TEAM WORK',
                    desc: 'สามารถทำงานร่วมกับผู้อื่นได้ สื่อสารได้',
                },
            ],
            skillName: 'DESIGN SKILL',
            skillDesc: 'ความเป็นเลิศด้านการออกแบบ',
            currentPick: 'DESIGN',
        };
    },
    components: {
        
    },
    mounted () {
        /**
         * Screen Constructor
         */
        this.fetchTotalRegistrant()
        this.screenConstruct()
        window.addEventListener('resize', this.screenConstruct)
    },
    methods: {
        fetchTotalRegistrant () {
            let counter = this.count
            axios.get('/api/registrant_amount').then(function (res) {
                counter.design = res.data.design
                counter.content = res.data.content
                counter.marketing = res.data.marketing
            })
        },
        setCount (data) {

        },
        setPresenter (jobTeam) {
            console.log('Setting...'+jobTeam)
            if(jobTeam == 'design') this.design()
            else if(jobTeam == 'content') this.content()
            else if(jobTeam == 'marketing') this.marketing()
        },
        design () {
            this.presenter.body = '/img/characters/Human_Design.png'
            this.presenter.light = '/img/characters/Light-Design.png'
            this.presentColor = '#fac61f'
            this.currentPick = 'DESIGN'
            this.jobDescription = 'ชื่นชอบการออกแบบและเฉดสีที่หลากหลาย รวมกับจินตนาการที่แปลเปลี่ยนลายเส้น และรูปร่าง พร้อมสามารถนำไปใช้ได้จริง'
            this.skills = [
                {
                    icon: '/img/characters/Design_Skill_1.png',
                    name: 'DESIGN SKILL',
                    desc: 'ความเป็นเลิศด้านการออกแบบ',
                },
                {
                    icon: '/img/characters/Design_Skill_2.png',
                    name: 'IMAGINATION',
                    desc: 'สามารถสร้างความคิดให้ออกมาเป็นภาพได้',
                },
                {
                    icon: '/img/characters/Design_Skill_3.png',
                    name: 'TEAM WORK',
                    desc: 'สามารถทำงานร่วมกับผู้อื่นได้ สื่อสารได้',
                },
            ]
            this.activateSkill(this.skills[0].name, this.skills[0].desc, 'skill-0', 'skill-m0')
        },
        content () {
            this.presenter.body = '/img/characters/Human_Content.png'
            this.presenter.light = '/img/characters/Light-Content.png'
            this.presentColor = '#3364a7'
            this.currentPick = 'CONTENT'
            this.jobDescription = 'ไอเดียแปลกใหม่ต้องยกให้เธอ ชอบคิด ชอบทำ ชอบถ่ายทอดความสร้างสรรค์ผ่านตัวอักษร คำพูด และรูปภาพ'
            this.skills = [
                {
                    icon: '/img/characters/Content_Skill_1.png',
                    name: 'WRITING SKILL',
                    desc: 'เขียนได้ไม่มีวันหยุด',
                },
                {
                    icon: '/img/characters/Content_Skill_2.png',
                    name: 'CREATIVITY',
                    desc: 'คิดไอเดียแปลกใหม่อย่างสร้างสรรค์',
                },
                {
                    icon: '/img/characters/Content_Skill_3.png',
                    name: 'TEAM WORK',
                    desc: 'สามารถทำงานร่วมกับผู้อื่นได้ สื่อสารได้',
                },
            ]
            this.activateSkill(this.skills[0].name, this.skills[0].desc, 'skill-0', 'skill-m0')
        },
        marketing () {
            this.presenter.body = '/img/characters/Human_Marketing.png'
            this.presenter.light = '/img/characters/Light-Marketing.png'
            this.presentColor = '#f14d50'
            this.currentPick = 'MARKETING'
            this.jobDescription = 'ถ้าชอบวางแผนใส่ใจและเข้าใจผู้อื่น น้องคือ Marketing เพราะการวางแผนการตลาดต้องเริ่มจากการเข้าใจลูกค้า'
            this.skills = [
                {
                    icon: '/img/characters/Marketing_Skill_1.png',
                    name: 'MARKETING SKILL',
                    desc: 'สามารถวางแผนการตลาดได้',
                },
                {
                    icon: '/img/characters/Marketing_Skill_2.png',
                    name: 'ATTENTIVE',
                    desc: 'สามารถใส่ใจและเข้าใจผู้อื่นได้',
                },
                {
                    icon: '/img/characters/Marketing_Skill_3.png',
                    name: 'TEAM WORK',
                    desc: 'สามารถทำงานร่วมกับผู้อื่นได้ สื่อสารได้',
                },
            ]
            this.activateSkill(this.skills[0].name, this.skills[0].desc, 'skill-0', 'skill-m0')
        },
        activateSkill (name, desc, id, idMobile) {
            this.skillName = name
            this.skillDesc = desc
            $('.skill-icon').removeClass('active')
            $('#'+id).addClass('active')
            $('#'+idMobile).addClass('active')
        },
        chooseRole(){
            var that = this;
            console.log('choose role');
            if(this.selectedRole == 'none'){

            }
            else{
                this.facebookLogin();
                that.$store.dispatch('setSelectedRole', {
                    selectedRole: that.selectedRole
                })
                
            }
            
        },
        selectJob(selectedRole){
            this.selectedRole = selectedRole

        },
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
            let height = (width * 0.53)
            return height
        },
        facebookLogin(){
            let component = this
            FB.login(function(response) {
                if (response.authResponse) {
                    console.log('Welcome!  Fetching your information.... ');

                    FB.api('/me', function(response) {
                        component.facebookInfo = response
                        console.log('Good to see you, ' + response.name + '.');
                        var fullname = response.name;
                        var arrName = fullname.split(" ");
                        var charCode = fullname[0].charCodeAt(0);
                        console.log(charCode);
                        if(charCode > 64 && charCode < 123){
                            // is english
                            component.$store.dispatch('setNameEN', {
                                firstnameEN: arrName[0],
                                lastnameEN: arrName[1]
                            })
                        }
                        else{
                            console.log('not english name');
                            component.$store.dispatch('setNameTH', {
                                firstnameTH: arrName[0],
                                lastnameTH: arrName[1]
                            })
                        }
                        component.facebookGetLoginStatus()
                        

                    });
                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            });
        },
        facebookGetLoginStatus(){
            var component = this
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                    // the user is logged in and has authenticated your
                    // app, and response.authResponse supplies
                    // the user's ID, a valid access token, a signed
                    // request, and the time the access token
                    // and signed request each expire
                    component.facebookAccessToken = response.authResponse.accessToken;
                    console.log(`!!!!!!! accessToken: ${component.facebookAccessToken}`)
                    console.log(component.selectedRole)
                    component.authen(component.selectedRole);
                } else if (response.status === 'not_authorized') {
                    console.log(`
                    the user is logged in to Facebook,
                    but has not authenticated your app
                    `)
                    
                } else {
                    console.log(`
                    the user isn't logged in to Facebook.
                    `)
                    
                }
            });
        },

        setFacebookInfo (info) {
            this.facebookInfo = info
        },

        authen(team){
            console.log(`called: authen(${team})`)
            var component = this;
            let filter = ['design', 'content', 'marketing']
            for(let i = 0; i < 3; i++){
                if(team == filter[i]){
                    console.log(this.facebookAccessToken)
                    axios.post('/authen/'+team, {
                        access_token: this.facebookAccessToken
                    }).then(function(res){
                        console.log("Fuck Yeah!")
                        console.log(res);
                        component.$store.dispatch('setAccessToken', {
                            token: res.data.token
                        })
                        axios.defaults.headers.common['Authorization'] = 'Bearer '+res.data.token
                        axios({
                            method: 'get',
                            url:'/api/register/data',
                        }).then((response) => {
                            // console.log(response.data);
                            var profile = response.data.profile;
                            profile['firstnameEN'] = profile['FirstNameEN'];
                            profile['lastnameEN'] = profile ['LastNameEN'];
                            profile['firstnameTH'] = profile['FirstName'];
                            profile['lastnameTH'] = profile['LastName'];
                            profile['nickname'] = profile['Nickname'];
                            profile['sex'] = profile['Gender'];
                            profile['religion'] = profile['Religion'];
                            profile['birthdate'] = profile['Birthday'];
                            profile['province'] = profile['ProvinceID'];//TODO :ask Fong to join the table
                            profile['bloodType'] = profile['BloodType'];
                            profile['telephone'] = profile['Telephone'];
                            profile['email'] = profile['Email'];
                            var emerContact = profile['EmergencyContact'].split(" ")
                            profile['emergencyFirstname'] = emerContact[0];
                            profile['emergencyLastname'] = emerContact[1];
                            profile['emergencyTelephone'] = profile['EmergencyContact'];
                            profile['emergencyRelationship'] = profile['EmergencyRelation']
                            // profile['jwcDiscoveryChannel']
                            profile['school'] = 'wait for fong';//TODO :ask Fong to join the table
                            profile['educationLevel'] = profile['EducationLevel']
                            profile['educationMajor'] = profile['EducationMajor']
                            profile['shirtSize'] = profile['ShirtSize']
                            profile['allergy'] = profile['Allergy']
                            profile['foodType'] = profile['FoodType']
                            profile['foodAllergic'] = profile['FoodAllergic']
                            profile['drugAllergic'] = profile['DrugAllergic']
                            component.$store.dispatch('setDataStep1',profile);
                            component.$store.dispatch('setDataStep2',profile);
                            component.$store.dispatch('setDataStep3',profile);
                            // generalAns1:'',
                            // generalAns2:'',
                            // generalAns3:'',
                            // generalAns4:'',
                            // marketingAns1:'',
                            // marketingAns2:'',
                            // contentAns1:'',
                            // contentAns2:'',
                            // designAns1:'',
                            // designAns2:'',
                            console.log(profile);
                            component.$router.push('/register/step1')
                        })
                        localStorage.setItem('accessToken', res.data.token);
                    })
                }
            }
            
        }
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

    .btn-join-disabled{
        background: gray !important;    
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

    .job-banner:hover, .job-banner.active, .job-banner-selected{
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
        color: #eee;
    }

    .desc-head{
        font-size: 22pt;
        font-weight: bold;
        /*color: #fdbe00;*/
        color: white;
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
        /*border: 5px solid #fdbe00;*/
        border: 5px solid #c7ac96;
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
        .btn-join:hover{
            border-bottom: 3px solid #2455a7;
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
            background: rgba(0,0,0,0.3);
            font-size: 24px;
            line-height: 32px;
        }
    }

</style>