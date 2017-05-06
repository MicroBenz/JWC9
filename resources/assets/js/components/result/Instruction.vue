<template>
  <div class="container">
    <div class="content-wrapper">
      <h1 class="title">สิ่งที่ต้องทำ (สำหรับน้องตัวจริง)</h1>
      <ol>
        <li>น้องๆ ที่ผ่านการคัดเลือกต้องโอนเงินเพื่อยืนยันสิทธิ์ <b>(ให้น้องๆ ถ่ายรูปสลิปเก็บไว้ด้วยนะจ๊ะ)</b></li>
        <li>ส่งหลักฐานการโอนเงินในระบบ <b>ตั้งแต่วันที่ 7 พฤษภาคม เวลา 16.00 น. จนถึงวันที่ 9 พฤษภาคม 2560 เวลา 23.59 น.</b></li>
        <li>น้องๆ ต้องส่งใบอนุญาตจากผู้ปกครอง <b>ในวันค่ายวันแรก 26 พฤษภาคม 2560</b></li>
      </ol>
      <h3 class="book-bank-title">โอนเงินยืนยันสิทธิ์มาได้ที่บัญชี</h3>
      <div class="book-bank-detail">
        <div class="book-bank-container border">
          <p><b class="k-bank">ธนาคารกสิกรไทย</b></p>
          <p>023-8-51843-1</p>
          <p>ชื่อบัญชี: น.ส. นพรัตน์ ฉัตรฉลองชัย</p>
        </div>
        <div class="book-bank-container">
          <p><b class="scb">ธนาคารไทยพาณิชย์</b></p>
          <p>160-400643-8</p>
          <p>ชื่อบัญชี: น.ส. นพรัตน์ ฉัตรฉลองชัย</p>
        </div>
      </div>
    </div>
    <p class="description">** การโอนเงินยืนยันสิทธิ์เพื่อเป็นการยืนยันว่าน้องสามารถเข้าค่ายได้จริงๆ ซึ่งหลังจบค่ายวันสุดท้ายจะมีการคืนเงินให้น้องๆ ทุกคนที่เข้าร่วม **</p>
  </div>
</template>

<style lang="scss">
@import '../../../sass/_variables.scss';

.content-wrapper {
  background-color: $brown;
  padding: 25px 60px;
  text-align: left;
  @media(max-width: 768px) {
    padding: 25px 20px;
  }
  .title {
    font-size: 60px;    
    color: $yellow;
    padding-bottom: 20px;
    font-weight: 600;
    text-align: center;
    @media(max-width: 768px) {
      font-size: 40px;
    }
  }
  ol > li b {
    color: $yellow;
  }
  ol > li {
    font-family: 'Cordia New';
    font-weight: bold;
  }
}
.description {
  font-family: 'Cordia New';
  font-weight: bold;
  color: black;
  text-align: center;
  padding-top: 35px;
}
.book-bank-title {
  text-align: center;
  color: $yellow;
  font-weight: bold;
}
.border {
  border-right: 3px solid white;
  @media(max-width: 768px) {
    border-right: none;
    border-bottom: 3px solid white;
  }
}
.book-bank-detail {
  text-align: center;
  font-family: 'Cordia New';  
  font-weight: bold;  
  .book-bank-container {
    width: 48%;
    display: inline-block;
    @media(max-width: 768px) {
      display: block;
      width: 100%;
      padding-top: 10px;
      padding-bottom: 10px;
    }
  }
  .k-bank {
    color: #00a651;
  }
  .scb {
    color: #9867ea;
  }
}
</style>
