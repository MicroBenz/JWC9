<template>
  <div class="map-wrapper">
    <div class="map-title">
      <h1 class="map-eng">สถานที่จัดค่าย</h1>
      <!--<h1 class="map-thai">แผนที่การเดินทาง</h1>-->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 map-column">
          <img style="max-width: 100%;" class="map-image" src="./map.png">
          <img style="max-width: 200px; margin: auto; margin-top: 20px;" v-on:click="goToGoogleMap" class="go-to-ggmap-button" src="./google-map.png">
        </div>
        <div class="col-xs-12 col-md-6">
          <img style="max-width: 100%;" src="./place.png">
          <img style="max-width: 100%;" src="./transportation.png">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    goToGoogleMap() {
      window.open('https://www.google.co.th/maps/place/%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%A0%E0%B8%B1%E0%B8%8F%E0%B8%88%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%A1/@13.8188261,100.5751203,17z/data=!3m1!4b1!4m5!3m4!1s0x30e29daba07cbffd:0xf0100b33d0b32b0!8m2!3d13.8188209!4d100.577309');
    }
  }
}
</script>

<style lang="scss" scoped>
@import '../../../../sass/_variables.scss';

$yellow: #fbc80b;

.map-wrapper {
  padding-top: $section-padding;
  padding-bottom: $section-padding;  
  @include background('/img/bg/blue.png');
  .map-column {
    padding-bottom: 25px;
  }
  .map-title {
    padding-bottom: 40px;
    .map-eng {
      color: $yellow;
      font-style: italic;
      text-transform: uppercase;
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
    .map-thai {
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
  .how-to-go {
    display: flex;
    .map-column, .place-detail {
      flex: 1;
    }
    .map-column {
      .map-image {
        width: 90%;
        padding-bottom: 20px;
      }
      .go-to-ggmap-button {
        width: 180px;
        cursor: pointer;
        @media(max-width: 768px) {
          width: 140px;
        }
      }
    }
    // .map {
    //   width: 100%;
    //   height: 350px;
    //   border: none;
    // }
    .place-detail {
      text-align: left;
      padding-left: 20px;
      img {
        width: 100%;
      }
      h2, h4, p {
        margin: 0;
      }
    }
  }
}
</style>