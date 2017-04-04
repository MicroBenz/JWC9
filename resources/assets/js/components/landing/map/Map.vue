<template>
  <div class="map-wrapper">
    <h1>Map</h1>
    <h1>แผนที่การเดินทาง</h1>
    <div class="container">
      <div class="how-to-go">
        <div class="map-column">
          <img class="map-image" src="./map.png">     
          <img class="go-to-ggmap-button" src="./google-map.png">   
        </div>
        <div class="place-detail">
          <img src="./place.png">
          <img src="./transportation.png">        
          <!--<h2>มหาวิทยาลัยราชภัฎจันทรเกษม</h2>
          <h4>39/1 ถนนรัชดาภิเษก แขวงจันทรเกษม เขตจตุจักร กรุงเทพฯ 10900</h4>
          <p><b>รถปรับอากาศ:</b> ปอ.185, ปอ.136, ปอ.206, ปอ.529</p>
          <p><b>รถโดยสารธรรมดา:</b> สาย 38, 126, 136, 134 ก, 178, 179, 206</p>     
          <iframe
            class="map"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAh0YlO7TG-Q_-2tzmuqYgJ_7z57_AsQvc
              &q=มหาวิทยาลัยราชภัฏจันทรเกษม" allowfullscreen>
          </iframe>   -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  
}
</script>

<style lang="scss" scoped>
@import '../../../../sass/_variables.scss';

.map-wrapper {
  padding-top: $section-padding;
  padding-bottom: $section-padding;  
  @include background('/img/bg/blue.png');
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