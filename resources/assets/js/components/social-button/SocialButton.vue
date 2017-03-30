<template>
  <div v-bind:style="{ backgroundColor: bgColor }" class="social-button-container">
    <i v-bind:class="computedIconClass"></i>   
  </div>
</template>

<script>
  export default {
    props: [
      'iconClass',
      'bgColor',
      'link'
    ],
    computed: {
      computedIconClass() {
        return [this.iconClass];
      }
    }
  }
</script>

<style lang="scss" scoped>
@import './SocialButton.scss';
</style>
