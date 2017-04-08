<template>
  <div class="loader-wrapper">
      <img src="./loader.gif">
    </div>
</template>

<style lang="scss" scoped>
@import '../../sass/_variables.scss';

.loader-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  background-color: $brown;
}
</style>