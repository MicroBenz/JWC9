<template>
<div>
  <img class="jwc-logo" src="./logo.png">
  <h1 class="camp-date">วันที่ 26-28 พฤษภาคม 2560</h1>
  <h3 class="camp-place">มหาวิทยาลัยราชภัฎจันทรเกษม</h3>
  <div class="countdown">
    <p>เหลือเวลาสมัครอีก</p>
    <p>{{countdownTime}}</p>
  </div>
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
  }
}
</script>

<style lang="scss" scoped>
.jwc-logo {
  width: 320px;
}
.camp-date {
  // font-size: 50px;
  margin: 0;
  font-weight: bold;
}
.camp-place {
  // font-size: 26px;
  margin: 0;
  font-weight: normal;
}
.countdown {
  padding-top: 10px;
  padding-bottom: 10px;  
  p {
    margin: 0;
  }
}
</style>