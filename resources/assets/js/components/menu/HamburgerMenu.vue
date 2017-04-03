<template>
  <div class="menu-container">
    <img src="./hamburger-menu.png">
  </div>
</template>

<script>
export default {
  
}
</script>

<style lang="scss" scoped>
.menu-container {
  position: fixed;
  z-index: 3;
  width: 80px;
  top: 25px;
  img {
    width: 100%
  }
}
</style>