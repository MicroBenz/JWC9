<template>
  <div class="menu-container">
    <img v-on:click="toggleMenu" src="./hamburger-menu.png">
    <side-menu v-if="isShowMenu" :closeMenu="toggleMenu"></side-menu>
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
  methods: {
    toggleMenu() {
      this.isShowMenu = !this.isShowMenu;
    }
  },
  components: {
    SideMenu
  }
}
</script>

<style lang="scss" scoped>
.menu-container {
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
</style>