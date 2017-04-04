<template>
  <div class = "faqContainer">
    <img src="/img/crown.png" >
    <h1 class ="topicHeader">Question - Answer</h1>
    <h4 class ="topicSubheader">ถาม - ตอบ</h4>
    <br>
    <section class='faqCarousel' id="faqCarousel">
          <div v-for="quesAns in quesAnses">
            <!--<img :src="img" class="imageInCarousel">-->
            <div class="qaCard">
              <h4 style="color:#fcc111;">{{quesAns[0]}}</h4>
              <p>{{quesAns[1]}}</p>
            </div>
          </div>
        </section>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        quesAnses: [],
        slider: null
      }
    },
    mounted() {
      var that = this
      setTimeout(function() {
          that.quesAnses.push(['q1','aaa']);
          that.quesAnses.push(['q2','aaa2']);
          that.quesAnses.push(['q3','aaa3']);

      }, 30)
    },
    updated() {
      $('.faqCarousel').slick({
          prevArrow:"<img class='a-left control-c prev slick-prev' src='/img/Button<.png' style='height:50%; width:auto;'>",
          nextArrow:"<img class='a-right control-c next slick-next' src='/img/Button>.png' style='height:50%; width:auto;'>",
          autoplay: true,
          arrows: true,
          dots: true,
          responsive: [{
            breakpoint: 500,
            settings: {
              dots: false,
              arrows: true,
              infinite: false,
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }]
        });
    }
  }
</script>
<style scoped>
  .qaCard{
    padding: 15px 24px;
    border-radius: 15px;
    margin-left: 10%;
    margin-right: 10%;
    background-color: #1e1e1e;
    font-style: italic;
  }
  .faqCarousel{
    margin-left: 20%;
    margin-right: 20%;
  }
  .faqContainer{
    padding-top: 2em;
    padding-bottom: 2em;
    background-image: url("/img/bg/brown.png");
    background-repeat: repeat;
  }
  .topicHeader{
    color: #ffd059;
    font-style: italic;
  }
</style>
