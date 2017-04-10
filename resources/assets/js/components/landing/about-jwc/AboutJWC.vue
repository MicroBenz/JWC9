<template>
<div class="about-jwc" id="jwc-story">
  <div class="container">
    <img class="about-title" src="./about-title.png">
    <div class="col-md-5 img-wrapper">
      <img class="about-img" src="./about.png">
    </div>
    <div class="col-md-7 about-jwc-text">
      <p>
        ค่ายสำหรับเหล่าผู้กล้าที่จะร่วมเดินทางค้นหาความสามารถลึกลับที่ซ่อนอยู่ในตัวของน้อง ๆ ม.ปลาย ฝึกปรือวิทยายุทธ ทั้ง 3 ศาสตร์ ได้แก่ <span class="role-text">Marketing, Content</span> และ <span class="role-text">Design</span> ขัดเกลาความคิดสร้างสรรค์ให้เฉียบคม พร้อมถ่ายทอดกระบวนการทำงานจริงและเรียนรู้เทคนิคพิเศษผ่านเหล่าเทพในวงการ Digital เพื่อร่วมกันสร้างอาวุธ ระดมสมอง เพื่อสร้างนวัตกรรมเว็บไซต์สุดสร้างสรรค์ไปกับค่าย <span class="role-text">JWC9: Digital Web War</span> มหาสงครามคน <span class="role-text">Digital</span>
      </p>
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
  padding-top: $section-padding;
  padding-bottom: $section-padding;
  // height: 100vh;
  text-align: left;
  @include background('/img/bg/blue.png');
  .container {
    // position: relative;
    // top: 50%;
    // transform: translateY(-50%);
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