<template>
  <div class="social-button-group">
    <!--<social-button icon-class="fa fa-facebook" link="facebook.com" bg-color="#337ab7"></social-button>
    <social-button icon-class="fa fa-twitter" link="twitter.com" bg-color="#2AAAE0"></social-button>-->
    <img v-on:click="openSocialWindow('https://www.facebook.com/jwcth/')" class="social-icon" src="./fb.png">
    <img class="social-icon" src="./twitter.png">   
    <img class="social-icon" src="./ig.png"> 
  </div>
</template>
<script>
import SocialButton from './SocialButton.vue';

export default {
  components: {
    SocialButton
  },
  methods: {
    openSocialWindow(link) {
      window.open(link);
    }
  }
}
</script>

<style lang="scss" scoped>
  .social-button-group {
    position: fixed;
    right: 0;
    // top: 38%;
    top: 50%;
    transform: translate(0, -50%);
    z-index: 3;
    .social-icon {
      width: 55px;
      display: block;
      cursor: pointer;
      @media(max-width: 768px) {
        width: 37px;
      }
    }
  }
</style>