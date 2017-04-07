<template>
<div class="social-banner">
  <h1 style="font-style: italic; font-weight: bold;
    text-transform: uppercase; font-size: 88px;
    line-height: 68px; color: #fbc80b">Contact us</h1>
  <h4>ติดต่อเรา</h4>
  <br>
  <div class="container">
    <div class="col-md-6">
      <div class="fb-page" style="width: 100%;" data-href="https://www.facebook.com/jwcth/" data-tabs="timeline" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jwcth/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jwcth/">Junior Webmaster Camp</a></blockquote></div>
    </div>
    <div class="col-md-6">
      <a class="twitter-timeline" data-height="500" href="https://twitter.com/ywcth">Tweets by ywcth</a>
    </div>
  </div>
</div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
@import '../../../sass/_variables.scss';

.social-banner {
  @include background('/img/bg/blue.png');
  padding-top: $section-padding;
  padding-bottom: $section-padding;
}
.fb-page{
  margin-bottom: 10%;
}
</style>