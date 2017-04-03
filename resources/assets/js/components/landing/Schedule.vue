<template>
  <div class="schedule">
    <div class="schedule-title">
      <h1 class="title-eng">Schedule</h1>
      <h1 class="title-thai">กำหนดการ</h1>
    </div>
    <div class="container">
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img class="" src="/img/landing/schedule/1.png">
          <h3>รับสมัคร</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img src="/img/landing/schedule/2.png">          
          <h3>ประกาศผลเข้ารอบ</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img src="/img/landing/schedule/3.png">          
          <h3>สัมภาษณ์</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img src="/img/landing/schedule/4.png">          
          <h3>ประกาศผลตัวจริงและสำรอง</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
@import '../../../sass/_variables.scss';

.schedule {
  @include background('/img/bg/brown.png');
  .schedule-title {
    .title-eng {
      text-transform: uppercase;
    }
  }
  .schedule-item {
    img {
      width: 90%;
    }
  }
}
</style>