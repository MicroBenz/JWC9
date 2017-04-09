<template>
<div class="not-found-container">
  <div class="container">
    <div class="col-md-4 col-sm-12 col-xs-12 img-col">
      <img class="not-found-image" src="./404.png">
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
      <div class="not-found-text">
        <h1 class="four-o-four">404</h1>
        <h2 class="not-found-eng">Page Not Found</h2>
        <router-link to="/" class="btn-game" href="#choose-a-job"><div class="btn-game" @click="scrollDown('#choose-a-job')">กลับสู่หน้าหลัก</div></router-link>
      </div>    
    </div>
  </div>
</div>
</template>

<style lang="scss">
@import '../../sass/_variables.scss';

.not-found-container {
  @include background('/img/bg/blue.png');
  width: 100%;
  height: 100vh;
  // display: table;
  // display: flex;
  .container {
    // display: table-cell;
    // vertical-align: middle;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    @media(max-width: 768px) {
      padding-top: 30px;
    }
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px)  {
      padding-top: 50px;
    }
    .img-col {
      text-align: right;
      @media(max-width: 768px) {
        text-align: center;
        padding-bottom: 20px;
      }
      @media only screen 
      and (min-device-width : 768px) 
      and (max-device-width : 1024px)  {
        text-align: center;        
        padding-bottom: 20px;
      }
      img {
        width: 50%;
        @media only screen 
        and (min-device-width : 768px) 
        and (max-device-width : 1024px)  {
          width: 35%;
        }
      } 
    }
  }
  .not-found-text {
    // align-self: center;
    width: 100%;
    text-align: center;
    .four-o-four {
      font-size: 300px;
      font-style: italic;
      line-height: 190px;
      text-shadow: 6px -3px 0px rgba(0, 0, 0, 0.2);     
      @media(max-width: 768px) {
        font-size: 92px;
        line-height: 72px;
      } 
      @media only screen 
      and (min-device-width : 768px) 
      and (max-device-width : 1024px)  {
        font-size: 200px;
        line-height: 125px;
      }
    }
    .not-found-eng {
      color: #fcc111;
      font-style: italic;
      font-size: 39px;
      line-height: 36px;
      text-shadow: 2px -2px 0px rgba(0, 0, 0, 0.2); 
      padding-bottom: 20px;
      @media(max-width: 768px) {
        padding-bottom: 13px;
      }
      @media only screen 
      and (min-device-width : 768px) 
      and (max-device-width : 1024px)  {
        font-size: 55px;
        line-height: 70px;
      }
    }
  }
  // display: table;
  // .not-found-wrapper {
  //   display: table-cell;
  //   vertical-align: middle;
  //   text-align: center;
  // }
}
.btn-game {
  font-size: 29px;
  max-width: 240px;
  @media(max-width: 768px) {
    font-size: 29px;
  }
}
.not-found-image {
  width: 100%;
}
</style>
