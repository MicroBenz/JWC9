<template>
<div class="intro" id="intro">
  <img class="jwc-logo" src="/img/logo.png" style="max-width: 240px !important;">
  <div class="main-img-sponsor">
       <img class="sponsor-vip-intro" src="/images/sponsor/vip/sanook.png" style="transform: scale(1.35)">
       <img class="sponsor-vip-intro" src="/images/sponsor/vip/TWA.png">
       <img class="sponsor-vip-intro sponsor-horizontal" src="/images/sponsor/vip/Chandrakasem.gif">
      <img class="sponsor-vip-intro sponsor-horizontal" src="/images/sponsor/vip/DekD.png">
  </div>
  <div class="date-and-place">
    <h1 class="camp-slogan">Digital Web War<br>มหาสงครามคนดิจิทัล</h1>
    <h3 class="camp-date">วันที่ 26-28 พฤษภาคม 2560</h3>
    <h4 class="camp-place">จัดโดยสมาคมผู้ดูแลเว็บไทย</h4>
  </div>
  <a class="btn-game" href="#choose-a-job"><div class="btn-game" @click="scrollDown('#choose-a-job')">สมัครเลย</div></a>
  <!--<img v-on:click="scrollDown" class="login-with-fb-button" src="./register-button.png">-->
  <!--<div class="countdown">
    <p>เหลือเวลาสมัครอีก</p>
    <p>{{countdownTime}}</p>
  </div>-->
  <p class="scroll-down-text" @click="scrollDown('#jwc-story')"><span class="text">scroll down <br></span><span class="arrow"><i class="fa fa-angle-double-down" aria-hidden="true"></i></span></p>
  <img class="kid kid-left" src="./kid-left.png">
  <img class="kid kid-right" src="./kid-right.png">  
</div>
</template>

<script>
import moment from 'moment';

export default {
  mounted() {
    // console.log(this.countdownTime);
    // setInterval(() => {
    //   const deadline = moment('2017-05-01 23:59:59');
    //   const today = moment();
    //   const dateDiff = deadline.diff(today);
    //   this.countdownTime = moment(dateDiff).format('M เดือน D วัน HH:mm:ss');
    // }, 1000);
    document.querySelector('.scroll-down-text').addEventListener('click', this.scrollDown)
  },
  data() {
    return {
      countdownTime: '- เดือน - วัน --:--:--'
    }
  },
  methods: {
    scrollDown (target) {
      $('html, body').animate({
        scrollTop: $(target).offset().top
      });
    }
  }
}
</script>

<style lang="scss" src="./Intro.scss" scoped></style>
<style type="text/css">
    .sponsor-horizontal{
        transform: scale(0.95);
    }

    .sponsor-vip-intro{
        max-height: 70px;
    }

    @media all and (min-width: 768px){
        .main-img-sponsor{
            margin-left: 30px;
        }
    }
</style>