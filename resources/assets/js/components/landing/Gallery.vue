<template>
  <div class = "galleryContainer" id="jwc-gallery">
    <h1 class ="topicHeader">Gallery</h1>
    <h4 class ="topicSubheader">ภาพกิจกรรม</h4>
    <div class="container">
        <section class='gallery' id="gallery">
          <div v-for="img in images">
            <img :src="img" class="imageInCarousel">
          </div>
        </section>
        <br>
        <section class='gallery-nav' id="gallery-nav">
          <div v-for="img in images">
            <img :src="img" class="imageInCarousel">
          </div>
        </section>
    </div>
    
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        images: [],
        slider: null
      }
    }, 
    mounted(){
      var that = this
      setTimeout(function() {
        for(let i=1;i<=5;i++){
          that.images.push(`/img/jwc8/j8_${i}.JPG`);
        }

      }, 30)
    },
    updated () {
        $('.gallery').slick({
          /*prevArrow:"<img class='a-left control-c prev slick-prev' src='/img/Button<.png' style='height:15%; width:auto;'>",
          nextArrow:"<img class='a-right control-c next slick-next' src='/img/Button>.png' style='height:15%; width:auto;'>",*/
          prevArrow:"<div class='btn-game arrow a-left control-c prev slick-prev'></div>",
          nextArrow:"<div class='btn-game arrow a-right control-c next slick-next'></div>",
          autoplay: true,
          dots: false,
          responsive: [{
            breakpoint: 500,
            settings: {
              dots: false,
              arrows: false,
              infinite: false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }]
        });
      $('.gallery-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.gallery',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        arrows: false,
      });
  }
  }
</script>
<style lang="scss" scoped>
  .container {
    margin-top: 20px;
    margin-bottom: 20px;
    @media only screen 
    and (min-device-width : 768px) 
    and (max-device-width : 1024px)  {
      padding-left: 60px;
      padding-right: 60px;
    }
  }
  .gallery{
    margin-left: 10%;
    margin-right: 10%;
    padding-left: 10%;
    padding-right: 10%;
    @media(max-width: 768px) {
      margin-left: 0;
      margin-right: 0;
      padding-left: 0;
      padding-right: 0;
    }
  }
  .imageInCarousel{
    margin: 0 auto; 
    max-width:100%;
    max-height:100%;
    padding-left: 5%;
    padding-right: 5%;
  }
  .under-image{
    padding: 5%;
    max-width:100%;
    max-height:100%;
  }
  .carousel-control.left, .carousel-control.right {
      background-image: none
  }
  .carousel-inner > .item > img {
      margin: 0 auto;
  }
  .topicHeader{
    font-style: italic;
    text-transform: uppercase;
    font-size: 88px;
    line-height: 68px;
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
  .topicSubheader{
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
  .galleryContainer{
    padding-top: 2em;
    padding-bottom: 2em;
    background-image: url("/img/bg/yellow.png");
    background-repeat: repeat;
    /*background-size: 100%;*/
  }
  .parent-carouselButton {
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .carouselButton {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }
</style>