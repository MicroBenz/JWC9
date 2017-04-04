<template>
<div class="intro">
  <img class="jwc-logo" src="/img/logo.png">
  <div class="date-and-place">
    <h1 class="camp-date">วันที่ 26-28 พฤษภาคม 2560</h1>
    <h3 class="camp-place">มหาวิทยาลัยราชภัฎจันทรเกษม</h3>
  </div>
  <img v-on:click="scrollDown" class="login-with-fb-button" src="./register-button.png">
  <!--<div class="countdown">
    <p>เหลือเวลาสมัครอีก</p>
    <p>{{countdownTime}}</p>
  </div>-->
  <p>scroll down</p>
  <img class="kid kid-left" src="./kid-left.png">
  <img class="kid kid-right" src="./kid-right.png">  
</div>
</template>

<script>
import moment from 'moment';

export default {
  mounted() {
    console.log(this.countdownTime);
    setInterval(() => {
      const deadline = moment('2017-05-01 23:59:59');
      const today = moment();
      const dateDiff = deadline.diff(today);
      this.countdownTime = moment(dateDiff).format('M เดือน D วัน HH:mm:ss');
    }, 1000);
  },
  data() {
    return {
      countdownTime: '- เดือน - วัน --:--:--'
    }
  },
  methods: {
    scrollDown: () => {
      // console.log($('#role-selection').offset());
      // console.log($('html, body').offset());  
      // $('body').scrollTop($('#role-selection').offset().top);    
      $(document.body).animate({
        scrollTop: $("#role-selection").offset().top
      });
    }
  }
}
</script>

<style lang="scss" src="./Intro.scss" scoped></style>