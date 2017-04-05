<template>
<div class="social-banner">
  <div class="container">
    <div class="col-md-6">
      <div class="fb-page" style="width: 100%;" data-href="https://www.facebook.com/jwcth/" data-tabs="timeline" data-width="400" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jwcth/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jwcth/">Junior Webmaster Camp</a></blockquote></div>
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
</style>