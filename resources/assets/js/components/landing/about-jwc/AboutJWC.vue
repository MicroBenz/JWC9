<template>
<div class="about-jwc" id="jwc-story">
  <div class="container">
    <img class="about-title" src="./about-title.png">
    <div class="col-md-5 img-wrapper">
      <img class="about-img" src="./about.png">
    </div>
    <div class="col-md-7 about-jwc-text">
      <p>ค่ายที่จะพาน้องๆ ม.ปลาย ค้นหาตัวตนที่ใช่ กับ 3 สาขาสำคัญในโลกการทำงานดิจิตอล ทั้ง <span class="role-text">Marketing, Content Creator</span> และ <span class="role-text">Design</span> พร้อมเรียนรู้เทคนิคสร้างสรรค์ไอเดียให้บรรเจิดผ่านกิจกรรมสุดว๊าวที่มีแค่ค่ายนี้เท่านั้น โดยภายในค่ายจะมี Workshop พิเศษจากพี่ๆ สุดเทพทั้งสามสาขา เพื่อขนอาวุธ ระดมไอเดีย สร้างโปรเจคนวัตกรรมของโลกยุค 2017</p>
  </div>
  </div>
</div>
</template>

<script>
export default {

}
</script>
<style lang="scss">
@import '../../../../sass/_variables.scss';

.about-jwc {
  // padding-top: $section-padding;
  // padding-bottom: $section-padding;
  height: 100vh;
  text-align: left;
  @include background('/img/bg/blue.png');
  .container {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    @media(max-width: 1024px) {
      text-align: center;
    }
  }
  .about-title {
    width: 700px;
    margin-bottom: 23px;
    @media(max-width: 768px) {
      width: 97%;
    }
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px)  {
      width: 75%;
    }
  }
  .img-wrapper {
    @media(max-width: 768px) {
      padding-top: 5px;
      padding-bottom: 15px;
    }
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px) {
      padding-top: 20px;
      padding-bottom: 45px;
    }
    .about-img {
      width: 100%;
      @media(max-width: 768px) {
        width: 95%;
      }
      @media only screen 
      and (min-device-width : 768px) 
      and (max-device-width : 1024px)  {
        width: 75%;
      }
    }
  }
  .about-jwc-text {
    padding: 15px 24px;
    border-radius: 15px;
    background-color: #1e1e1e;
    font-style: italic;
    p {
      @media(max-width: 768px) {
        font-size: 20px;
      }
      @media only screen 
      and (min-device-width : 768px) 
      and (max-device-width : 1024px)  {
        font-size: 27px;        
      }
    }
    .role-text {
      color: #fcc111;
    }
  }
}
</style>