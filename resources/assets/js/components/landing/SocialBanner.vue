<template>
<div class="social-banner" id="contact">
  <h1 class="topic-header">Contact us</h1>
  <h4 class="topic-subheader">ติดต่อเรา</h4>
  <br>
  <div class="container">
    <div class="col-md-6 fb-wrapper">
      <div v-if="isMobile" class="fb-page" data-href="https://www.facebook.com/jwcth/" data-tabs="timeline" data-width="260" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jwcth/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jwcth/">Junior Webmaster Camp</a></blockquote></div>
      <div v-if="!isMobile" class="fb-page" data-href="https://www.facebook.com/jwcth/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jwcth/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jwcth/">Junior Webmaster Camp</a></blockquote></div>
    </div>
    <div class="col-md-6">
      <a class="twitter-timeline" data-height="500" href="https://twitter.com/jwcth">Tweets by ywcth</a>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data(){
    return {
      isMobile: window.screen.width <= 480
    };
  },
  mounted() {
    console.log('did mount', window.screen.width < 480);
  }
}
</script>

<style lang="scss" scoped>
@import '../../../sass/_variables.scss';

.topic-header {
  font-style: italic;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 88px;
  line-height: 68px;
  color: #fbc80b;
  @media(max-width: 768px) {
    font-size: 64px;
    line-height: 45px;
  }
  @media only screen 
  and (min-device-width : 768px) 
  and (max-device-width : 1024px)  {
    font-size: 88px;
    line-height: 68px;
  }
}
.topic-subheader {
  font-style: bold;
  color: #5e4239;
  font-size: 44px;
  @media(max-width: 768px) {
    font-size: 35px;
  }
  @media only screen 
  and (min-device-width : 768px) 
  and (max-device-width : 1024px)  {
    font-size: 44px;
  }
}
.social-banner {
  @include background('/img/bg/blue.png');
  padding-top: $section-padding;
  padding-bottom: $section-padding;
}
.fb-page{
  margin-bottom: 10%;
}
.fb-page, 
.fb-page span, 
.fb-page span iframe[style] { 
    width: 100% !important; 
}
.fb-wrapper {
  @media(max-width: 768px) {
    padding-bottom: 35px;
  }
}
</style>