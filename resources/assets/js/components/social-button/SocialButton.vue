<template>
  <div v-bind:style="{ backgroundColor: bgColor }" class="social-button-container" id="timeline">
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

<style lang="scss" src="./SocialButton.scss" scoped></style>
