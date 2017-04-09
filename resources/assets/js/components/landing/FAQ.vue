<template>
  <div class = "faqContainer" id="faq">
    <img src="/img/crown.png" class="crown">
    <h1 class ="topicHeader">Question - Answer</h1>
    <h4 class ="topicSubheader">ถาม - ตอบ</h4>
    <br>
    <section class='faqCarousel' id="faqCarousel">
          <div v-for="quesAns in quesAnses">
            <!--<img :src="img" class="imageInCarousel">-->
            <div class="qaCard">
              <h4 style="color:#fcc111;">{{quesAns[0]}}</h4>
              <p>{{quesAns[1]}}</p>
            </div>
          </div>
        </section>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        quesAnses: [],
        slider: null
      }
    },
    mounted() {
      var that = this
      setTimeout(function() {
          that.quesAnses.push(['ค่ายนี้จัดขึ้นมาเพื่ออะไร?','ค่ายนี้จัดขึ้นเพื่อให้เยาวชนได้เรียนรู้การทำงานในวงการดิจิตอลให้มากขึ้น และฝึกการทำงานร่วมกับผู้อื่น']);
          that.quesAnses.push(['รับสมัครใครบ้าง?','ค่ายนี้รับสมัครน้องที่กำลังศึกษาอยู่ในระดับชั้นม.ปลายหรือเทียบเท่า รวมถึงน้อง ๆ ที่เพิ่งจบชั้น ม.3 และน้องที่เพิ่งจบชั้น ม.6 กำลังจะเข้ามหาวิทยาลัย ซึ่งรวมไปถึงระดับ ปวช.1 ถึง ปวช.3 จ้า']);
          that.quesAnses.push(['ค่ายนี้รับสมัครกี่คน?','เราจะคัดเลือกน้อง ๆ ที่สมัครมาเพื่อเข้าค่ายทั้งหมด 42 คน แบ่งเป็นสาขาละ 14 คน โดยจะมีรายชื่อสำรอง อีกสาขาละ 6 คน การคัดเลือกจะดูจากการตอบคำถามของน้อง ๆ ฉะนั้นเต็มที่นะ !!!']);
          that.quesAnses.push(['ทำไมต้องมีการเก็บค่ามัดจำ?','เก็บเงินค่ามัดจำเพื่อเป็นการยืนยันว่าน้อง ๆ จะมาค่ายจริง หลังจากเข้าค่ายเสร็จจะมีการคืนเงินมัดจำครบเต็มจำนวน']);
          that.quesAnses.push(['ค่ายมีการค้างคืน หรือไม่?','มีการค้างคืนที่ มหาวิทยาลัยราชภัฏจันทรเกษม 3 วัน 2 คืนในวันที่ 26 และ 28 พฤษภาคม พ.ศ.2560']);
          that.quesAnses.push(['ไม่มี Facebook สมัครได้ไหม?','ไม่สามารถสมัครได้ เพราะเราจะมีการเก็บช้อมูล อีกทั้งยังจะมีกลุ่มที่ใช้ในการติดต่อสื่อสาร ก่อนค่าย ระหว่างค่าย และหลังค่าย โดยใช้ Facebook เป็นช่องทางหลัก อีกทั้งยังมีกลุ่มลับ JWC สำหรับผู้ที่ได้เข้าร่วมค่าย ซึ่งเป็นเอกลักษณ์สืบทอดกันมาอีกด้วย']);
          that.quesAnses.push(['ไม่เคยทำเว็บ ทำเว็บไม่เป็น สมัครได้ไหม?','ได้สิ! ทุกคนย่อมฝึกฝนกันได้ ขอแค่มีความพยายามที่จะเรียนรู้พัฒนาตัวเองก่อนเข้าค่าย มีพื้นฐานมาเล็กน้อยก็สามารถสมัครค่ายนี้ได้แล้ว สู้ ๆ นะ ;)']);
          that.quesAnses.push(['จะทราบผลการสมัครว่าเข้ารอบได้อย่างไร','จะมีรายชื่อผู้ที่ผ่านเข้าค่ายประกาศที่หน้าเว็บไซต์ และ น้อง ๆ สามารถเข้าสู่ระบบเพื่ออัพโหลดเอกสารยืนยันตนได้']);          

      }, 30)
    },
    updated() {
      $('.faqCarousel').slick({
          /*prevArrow:"<img class='a-left control-c prev slick-prev' src='/img/Button<.png' style='height:auto; width:5%;'>",
          nextArrow:"<img class='a-right control-c next slick-next' src='/img/Button>.png' style='height:auto; width:5%;'>",*/
          prevArrow:"<div class='btn-game arrow a-left control-c prev slick-prev'></div>",
          nextArrow:"<div class='btn-game arrow a-right control-c next slick-next'></div>",
          autoplay: true,
          arrows: true,
          dots: true,
          adaptiveHeight: true,
          responsive: [{
            breakpoint: 1024,
            settings: {
              dots: false,
              arrows: false,
              infinite: false,
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }]
        });
    }
  }
</script>
<style lang="scss" scoped>
  h4 {
    font-size: 19px;
  }
  .crown {
    padding-bottom: 15px;
  }
  .slick-arrow {
    @media(max-width: 768px) {
      display: none;    
      // visibility: hidden;  
    }
  }
  .qaCard{
    padding: 15px 24px;
    border-radius: 15px;
    margin-left: 10%;
    margin-right: 10%;
    background-color: #1e1e1e;
    font-style: italic;
    @media(max-width: 768px) {
      margin-left: 0;
      margin-right: 0;
    }
  }
  .faqCarousel{
    margin-left: 20%;
    margin-right: 20%;
    @media(max-width: 768px) {
      margin-left: 10%;
      margin-right: 10%;
    }
  }
  .faqContainer{
    padding-top: 2em;
    padding-bottom: 2em;
    background-image: url("/img/bg/brown.png");
    background-repeat: repeat;
  }
  .topicHeader{
    color: #ffd059;
    font-style: italic;
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
  .topicSubheader {
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
</style>
