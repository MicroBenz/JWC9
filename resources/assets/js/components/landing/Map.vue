<template>
  <div>
    <h1>การเดินทาง</h1>
    <div class="how-to-go">
      <div class="map-container">
        <h1>เอารูปไว้นี่</h1>
      </div>
      <div class="place-detail">
        <h2>มหาวิทยาลัยราชภัฎจันทรเกษม</h2>
        <h4>39/1 ถนนรัชดาภิเษก แขวงจันทรเกษม เขตจตุจักร กรุงเทพฯ 10900</h4>
        <p><b>รถปรับอากาศ:</b> ปอ.185, ปอ.136, ปอ.206, ปอ.529</p>
        <p><b>รถโดยสารธรรมดา:</b> สาย 38, 126, 136, 134 ก, 178, 179, 206</p>     
        <iframe
          class="map"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAh0YlO7TG-Q_-2tzmuqYgJ_7z57_AsQvc
            &q=มหาวิทยาลัยราชภัฏจันทรเกษม" allowfullscreen>
        </iframe>   
      </div>
    </div>
  </div>
</template>

<script>
export default {
  
}
</script>

<style lang="scss" scoped>
  .how-to-go {
    display: flex;
    .map-container, .place-detail {
      flex: 1;
    }
    .map {
      width: 100%;
      height: 350px;
      border: none;
    }
    .place-detail {
      text-align: left;
      padding-left: 20px;
      h2, h4, p {
        margin: 0;
      }
    }
  }
</style>