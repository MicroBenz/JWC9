<template>
  <div class="schedule">
    <div class="schedule-title">
      <h1 class="title-eng">Timeline</h1>
      <!--<h1 class="title-thai">กำหนดการ</h1>-->
    </div>
    <div class="container">
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img v-if="!isActiveClass(1)" src="./1.png">
          <img v-if="isActiveClass(1)" src="./1-active.png">
          <h3 :class="isActiveClass(1) ? 'highlight' : ''">รับสมัคร</h3>
          <p>10 เมษายน - 1 พฤษภาคม</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img v-if="!isActiveClass(2)" src="./2.png">
          <img v-if="isActiveClass(2)" src="./2-active.png">        
          <h3 :class="isActiveClass(2) ? 'highlight' : ''">ประกาศผล</h3>
          <p>5 พฤษภาคม</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img v-if="!isActiveClass(3)" src="./3.png">
          <img v-if="isActiveClass(3)" src="./3-active.png">          
          <h3 :class="isActiveClass(3) ? 'highlight' : ''">ยืนยันสิทธิ์</h3>
          <p>5 - 10 พฤษภาคม</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="schedule-item">
          <img v-if="!isActiveClass(4)" src="./4.png">
          <img v-if="isActiveClass(4)" src="./4-active.png">        
          <h3 :class="isActiveClass(4) ? 'highlight' : ''">วันค่าย</h3>
          <p>26 - 28 พฤษภาคม</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from 'moment';

export default {
  methods: {
    isActiveClass(order) {
      let today = moment();
      let startDate, endDate;
      switch (order) {
        case 1:
          startDate = moment('2017-04-10');
          endDate = moment('2017-05-01');
          today = moment('2017-04-15');
          return startDate.isSameOrBefore(today) && today.isSameOrBefore(endDate); 
        case 2:
          startDate = moment('2017-05-05');
          return startDate.isSame(today);
        case 3:
          startDate = moment('2017-05-05');
          endDate = moment('2017-05-10');         
          return startDate.isSameOrBefore(today) && today.isSameOrBefore(endDate);
        case 4:
          startDate = moment('2017-05-26');
          endDate = moment('2017-05-28');  
          return startDate.isSameOrBefore(today) && today.isSameOrBefore(endDate);
      }
    }
  }
}
</script>

<style lang="scss" scoped>
@import '../../../../sass/_variables.scss';

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
      @media(max-width: 768px) {
        font-size: 64px;
        line-height: 45px;
      }
      @media only screen 
      and (min-device-width : 768px) 
      and (max-device-width : 1024px)  {
        font-size: 88px;
        line-height: 68px;
      }
    }
    .title-thai {
      font-size: 44px;
      @media(max-width: 768px) {
        font-size: 35px;
      }
      @media only screen 
      and (min-device-width : 768px) 
      and (max-device-width : 1024px)  {
        font-size: 44px;
      }
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