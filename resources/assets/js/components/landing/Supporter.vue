<template>
  <div class="sponsor-wrapper">
    <h1>Sponsor</h1>
    <div class="sponsor-title">
      <h1 class="sponsor-eng">Sponsor</h1>
      <h1 class="sponsor-thai">สนับสนุน</h1>
    </div>
    <div class="container">
      <div class="row">
      <div class="box-sponsor-logoList">
          <div class="col-xs-12 col-sm-6 col-md-6">
              <img class="img-responsive" src="./sponsor/VIP/Chandrakasem.gif">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
              <img class="img-responsive" src="./sponsor/VIP/TWA.png">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
              <img class="img-responsive" src="./sponsor/SuperPartner/CampHUB.png">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
              <img class="img-responsive" src="./sponsor/SuperPartner/P and T.png">
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
              <img class="img-responsive" src="./sponsor/SuperPartner/Witty.jpg">
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
              <img class="img-responsive" src="./sponsor/Partner/LNW.png">
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
              <img class="img-responsive" src="./sponsor/Partner/OnDemand.png">
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3">
              <img class="img-responsive" src="./sponsor/Partner/Thumb.png">
          </div>
      </div>
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

	$yellow: #fbc80b;
.sponsor-wrapper {
  padding-top: $section-padding;
  padding-bottom: $section-padding;  
  @include background('/img/bg/blue.png');
.sponsor-title {
    padding-bottom: 40px;
    .sponsor-eng {
      color: $yellow;
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
    .sponsor-thai {
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
  }
  .box-sponsor-logoList {
    background-color:#fff;
    border-radius:40px;

  }
  h2, h4, p {
        margin: 0;
      }
  .img-responsive {
      max-width:100%;
  }
}

</style>