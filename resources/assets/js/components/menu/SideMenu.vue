<template>
  <div class="side-menu-container">
  <div class="side-menu">
    <img v-on:click="closeMenu" class="close-button" src="./cross.png">
    <h1 class="menu-title">Menu</h1>
    <a class="side-menu-link" href="#intro">
      <div class="menu-item">
        <h3 class="selected">Home</h3>
        <h3 class="menu-thai">หน้าแรก</h3>
      </div>
    </a>
    <a class="side-menu-link" href="#jwc-story">
      <div class="menu-item">
        <h3>What is JWC</h3>
        <h3 class="menu-thai">JWC คืออะไร</h3>
      </div>
    </a>
    <a class="side-menu-link" href="#choose-a-job">
      <div class="menu-item">
        <h3>Choose a Job</h3>
        <h3 class="menu-thai">เลือกสายที่ใช่</h3>
      </div>
    </a>
    <a class="side-menu-link" href="#timeline">
      <div class="menu-item">
        <h3>Timeline</h3>
        <h3 class="menu-thai">ช่วงเวลา</h3>
      </div>
    </a>
    <a class="side-menu-link" href="#location">
      <div class="menu-item">
        <h3>Location</h3>
        <h3 class="menu-thai">สถานที่จัดค่าย</h3>
      </div>
    </a>
    <a class="side-menu-link" href="#gallery">
      <div class="menu-item">
        <h3>Gallery</h3>
        <h3 class="menu-thai">รวมภาพกิจกรรม</h3>
      </div>
    </a>
    <a class="side-menu-link" href="#faq">
      <div class="menu-item">
        <h3>Q&A</h3>
        <h3 class="menu-thai">คำถามที่พบบ่อย</h3>
      </div>
    </a>
    <a class="side-menu-link" href="#sponsor">
      <div class="menu-item">
        <h3>Sponsor</h3>
        <h3 class="menu-thai">เพื่อนร่วมทาง</h3>
      </div>
    </a>
    </a>
    <a class="side-menu-link" href="#contact">
      <div class="menu-item">
        <h3>Contact us</h3>
        <h3 class="menu-thai">ติดต่อเรา</h3>
      </div>
    </a>
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

.side-menu-link{
  text-decoration: none;
}

.side-menu-link:hover{
  text-decoration: underline;
  text-decoration-color: #fcc111;
}

.side-menu-container{
  padding-right: 17px;
  height: 100%;
  width: 100%;
  overflow: hidden;
  position: relative;
}

.side-menu::-webkit-scrollbar {
  width: 0px;  /* remove scrollbar space */
  background: transparent;  /* optional: just make scrollbar invisible */
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
  @media(max-width: 768px) {
    width: 200px;
  }
  .close-button {
    position: absolute;
    right: 15px;
    top: 15px;
    width: 30px;
    @media(max-width: 768px) {
      width: 20px;
    }
  }
  .menu-title {
    color: $yellow-menu;
    font-style: italic;
    padding-top: 40px;
    @media(max-width: 768px) {
      font-size: 47px;
    }
  }
  .menu-item {
    padding-top: 15px;
    padding-bottom: 15px;
    @media(max-width: 768px) {
      padding-top: 10px;
      padding-bottom: 10px;
    }
    h3 {
      color: #ffffff;
      font-style: italic;
      @media(max-width: 768px) {
        font-size: 30px;
      }
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
