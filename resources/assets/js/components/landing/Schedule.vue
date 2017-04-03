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
          <h3 class="highlight">รับสมัคร</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img src="/img/landing/schedule/2.png">          
          <h3>ประกาศผล</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img src="/img/landing/schedule/3.png">          
          <h3>ยืนยันสิทธิ์</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img src="/img/landing/schedule/4.png">          
          <h3>วันค่าย</h3>
          <p>7 เมษายน วันส่งงาน...</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import '../../../sass/_variables.scss';

.schedule {
  @include background('/img/bg/brown.png');
  padding-top: $section-padding;
  padding-bottom: $section-padding;
  .schedule-title {
    .title-eng {
      text-transform: uppercase;
      font-style: italic;
      color: $yellow;
      font-size: 88px;
      line-height: 68px;
    }
    .title-thai {
      font-size: 44px;
    }
  }
  .schedule-item {
    img {
      width: 90%;
      padding-bottom: 15px;
    }
    h3 {
      font-size: 64px;
      line-height: 50px;
    }
    .highlight {
      color: $yellow;
    }
  }
}
</style>