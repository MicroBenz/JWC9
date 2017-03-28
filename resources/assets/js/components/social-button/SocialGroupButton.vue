<template>
  <div class="social-button-group">
    <social-button icon-class="fa fa-facebook" link="facebook.com" bg-color="#337ab7"></social-button>
    <social-button icon-class="fa fa-twitter" link="twitter.com" bg-color="#2AAAE0"></social-button>
  </div>
</template>
<script>
  import SocialButton from './SocialButton.vue';

  export default {
    components: {
      SocialButton
    }
  }
</script>

<style lang="scss" scoped>
  .social-button-group {
    position: fixed;
    right: 0;
    top: 40%;
  }
</style>