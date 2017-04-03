<template>
  <div class="side-menu">
    <img v-on:click="closeMenu" class="close-button" src="./cross.png">
    <h1 class="menu-title">Menu</h1>
    <div class="menu-item">
      <h3 class="selected">Home</h3>
      <h3 class="menu-thai">หน้าแรก</h3>
    </div>
    <div class="menu-item">
      <h3>What is JWC</h3>
      <h3 class="menu-thai">JWC คืออะไร</h3>
    </div>
    <div class="menu-item">
      <h3>Create Character</h3>
      <h3 class="menu-thai">สร้างตัวละคร</h3>
    </div>
    <div class="menu-item">
      <h3>Schedule</h3>
      <h3 class="menu-thai">กำหนดการ</h3>
    </div>
    <div class="menu-item">
      <h3>Map</h3>
      <h3 class="menu-thai">แผนที่</h3>
    </div>
    <div class="menu-item">
      <h3>Gallery</h3>
      <h3 class="menu-thai">รวมภาพกิจกรรม</h3>
    </div>
    <div class="menu-item">
      <h3>Q&A</h3>
      <h3 class="menu-thai">ถามตอบ</h3>
    </div>
    <div class="menu-item">
      <h3>Sponsor</h3>
      <h3 class="menu-thai">เพื่อนร่วมทาง</h3>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    'closeMenu'
  ]
}
</script>

<style lang="scss" scoped>
$yellow-menu: #fcc111;
$black-bg: #1b1b1b;

h3 {
  font-size: 38px;
}

.side-menu {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  width: 400px;
  background-color: $black-bg;
  text-align: center;
  overflow-y: scroll;
  .close-button {
    position: absolute;
    right: 15px;
    top: 15px;
    width: 30px;
  }
  .menu-title {
    color: $yellow-menu;
    font-style: italic;
    padding-top: 40px;
  }
  .menu-item {
    padding-top: 15px;
    padding-bottom: 15px;
    h3 {
      color: #ffffff;
      font-style: italic;
    }
    .menu-thai, .selected {
      color: $yellow-menu;
    }
    .menu-thai {
      font-size: 25px;
    }
  }
}
</style>
