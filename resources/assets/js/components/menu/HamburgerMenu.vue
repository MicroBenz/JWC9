<template>
  <div class="menu-container">
    <img @click="toggleMenuState()" src="./hamburger-menu.png">
    <div class="side-menu-container" id="menu" @click="toggleMenuState()">
      <div class="side-menu">
        <img class="close-button" src="./cross.png">
        <h1 class="menu-title" @click="$event.preventDefault()">Menu</h1>
        <a class="side-menu-link" href="#intro" @click="scrollTo('#intro')">
          <div class="menu-item">
            <h3 class="selected">Home</h3>
            <h3 class="menu-thai">หน้าแรก</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#jwc-story" @click="scrollTo('#jwc-story')">
          <div class="menu-item">
            <h3>What is JWC</h3>
            <h3 class="menu-thai">JWC คืออะไร</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#choose-a-job" @click="scrollTo('#choose-a-job')">
          <div class="menu-item">
            <h3>Choose a Job</h3>
            <h3 class="menu-thai">เลือกสายที่ใช่</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#timeline" @click="scrollTo('#timeline')">
          <div class="menu-item">
            <h3>Timeline</h3>
            <h3 class="menu-thai">ช่วงเวลา</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#location" @click="scrollTo('#location')">
          <div class="menu-item">
            <h3>Location</h3>
            <h3 class="menu-thai">สถานที่จัดค่าย</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#jwc-gallery" @click="scrollTo('#jwc-gallery')">
          <div class="menu-item">
            <h3>Gallery</h3>
            <h3 class="menu-thai">รวมภาพกิจกรรม</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#faq" @click="scrollTo('#faq')">
          <div class="menu-item">
            <h3>Q&A</h3>
            <h3 class="menu-thai">คำถามที่พบบ่อย</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#sponsor" @click="scrollTo('#sponsor')">
          <div class="menu-item">
            <h3>Sponsor</h3>
            <h3 class="menu-thai">ผู้สนับสนุน</h3>
          </div>
        </a>
        <a class="side-menu-link" href="#contact" @click="scrollTo('#contact')">
          <div class="menu-item">
            <h3>Contact us</h3>
            <h3 class="menu-thai">ติดต่อเรา</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import SideMenu from './SideMenu';

export default {
  data() {
    return {
      isShowMenu: false
    };
  },
    mounted () {
        //console.log('mounted')
        this.constructMenu()
    },
  methods: {
      constructMenu(){
          //console.log('constructing')
          $('#menu').hide()
      },
      scrollTo (target) {
          $('html, body').animate({
              scrollTop: $(target).offset().top
          });
          this.$parent.toggleMenu()
      },
      toggleMenuState () {
          //console.log('toggleMenuState Invoked')
          //console.log(this.isShowMenu)
          this.isShowMenu = !this.isShowMenu
          //console.log(this.isShowMenu)
          this.toggleMenu()
      },
      toggleMenu() {
          //console.log('toggleMenu Invoked')
          if(this.isShowMenu) {
              //console.log('true: show')
              $('#menu').show('fast')
          }
          else {
              //console.log('false: hide')
              $('#menu').hide('fast')
          }
      },
  },
  components: {
    SideMenu
  }
}
</script>

<style lang="scss" scoped>
.menu-container {
  cursor: pointer;
  position: fixed;
  z-index: 200;
  width: 80px;
  top: 25px;
  @media(max-width: 768px) {
    width: 50px;
  }
  img {
    width: 100%
  }
}
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