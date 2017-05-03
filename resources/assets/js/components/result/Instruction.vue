<template>
  <div class="container">
    <div class="content-wrapper">
      <h1 class="title">สิ่งที่ต้องทำ (สำหรับน้องตัวจริง)</h1>
      <ol>
        <li>น้องๆ ที่ผ่านการคัดเลือกต้องโอนเงินเพื่อยืนยันสิทธิ์ <b>(ให้น้องๆ ถ่ายรูปสลิปเก็บไว้ด้วยนะจ๊ะ)</b></li>
        <li>ส่งหลักฐานการโอนเงินในระบบ <b>ภายในวันที่ 9 พฤษภาคม 2560 เวลา 23.59 น.</b></li>
        <li>น้องๆ ต้องส่งใบอนุญาตจากผู้ปกครอง <b>ภายในวันที่ 26 พฤษภาคม 2560</b></li>
      </ol>
      <p class="description">** การโอนเงินยืนยันสิทธิ์เพื่อเป็นการยืนยันว่าน้องสามารถเข้าค่ายได้จริงๆ ซึ่งหลังจบค่ายวันสุดท้ายจะมีการคืนเงินให้น้องๆ ทุกคนที่เข้าร่วม **</p>
    </div>
  </div>
</template>

<style lang="scss">
@import '../../../sass/_variables.scss';

.content-wrapper {
  background-color: $brown;
  padding: 25px 60px;
  text-align: left;
  .title {
    font-size: 60px;    
    color: $yellow;
    padding-bottom: 20px;
    font-weight: 600;
    text-align: center;
  }
  ol > li b {
    color: $yellow;
  }
  ol > li {
    font-family: 'Cordia New';
    font-weight: bold;
  }
  .description {
    font-style: italic;
    text-align: center;
  }
}
</style>
