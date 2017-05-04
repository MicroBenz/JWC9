<template>
  <div class="congrat-container">
    <div class="congrat-wrapper">
      <h1 class="congrat-title">CONGRATULATIONS</h1>
      <div class="congrat">
        <p>พี่ๆ ได้รับหลักฐานการโอนเงินเรียบร้อยแล้ว!</p>
        <p>อย่าลืมพิมพ์ใบรับรองจากผู้ปกครองแล้วนำมาวันค่ายด้วยนะ</p>
        <p>แล้วเจอกันนะ :D</p>
      </div>
      <a class="printout">พิมพ์ใบรับรองจากผู้ปกครอง</a>
      <img class="kid kid-left" src="./kid-left.png">
      <img class="kid kid-right" src="./kid-right.png">  
    </div>  
  </div>
</template>

<style lang="scss" scoped>
@import '../../../sass/_variables.scss';

.congrat-container {
  @include background('/img/bg/brown.png');
  min-height: 100vh;
  text-align: center;
  padding-top: 50px;
  display: table;
  width: 100%;
  .congrat-wrapper {
    display: table-cell;
    vertical-align: middle;
  }
}

.congrat-title {
  display: inline-block;
  background-color: #14b4c0;
  font-weight: 800;
  font-size: 47px;
  padding: 6px 40px;
  border-radius: 35px;
}
.congrat {
  padding-top: 50px;
  padding-bottom: 50px;
  @media(max-width: 768px) {
    padding-top: 25px;
    padding-bottom: 25px;
  }
}
.printout {
  background-color: #ee5d5f;
  padding: 8px 25px;
  border-radius: 20px;
  color: white;
  text-decoration: none;
  cursor: pointer;
  font-weight: bold;
}

p {
  font-size: 36px;
  @media(max-width: 768px) {
    font-size: 28px;
  }
}

.kid {
    position: absolute;
    bottom: 0;
    height: 275px;    
    &.kid-left {
      left: 8%;
    }
    &.kid-right {
      right: 5%;
    }
  }
  @media( max-width : 1075px){
      .kid{
        height: 220px;
      }
  }
  /*@media( max-width : 750px),(max-height: 720px){*/
  @media( max-width : 750px){
      .kid{
        height: 100px;
      }
  }
</style>