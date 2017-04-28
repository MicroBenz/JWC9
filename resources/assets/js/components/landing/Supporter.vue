<template>
  <div class="sponsor-wrapper">
    <div class="sponsor-title">
      <h1 class="sponsor-eng">Sponsor</h1>
      <h1 class="sponsor-thai">สนับสนุน</h1>
    </div>
    <div class="container">
      <div class="box-sponsor-logoList">
        <div class="row row-sponsor text-center">
              <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/Chandrakasem.png">
              <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/TWA.png">
            <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/sanook.png">
        </div>
        <div class="row row-sponsor text-center">
            <img class="img-responsive sponsor-img sponsor-super" src="/images/sponsor/super/CampHUB.png">
            <img class="img-responsive sponsor-img sponsor-super" id="logo-ondemand" src="/images/sponsor/super/OnDemand.png">
            <img class="img-responsive sponsor-img sponsor-super" src="/images/sponsor/super/P and T.png">
        </div>
        <div class="row">
            <img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/partner/Thumb.png">
            <img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/partner/LNW.png">
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
      padding: 60px;

  }
  h2, h4, p {
        margin: 0;
      }
  .img-responsive {
      max-width:100%;
  }
}

    .sponsor-img{
        margin: auto 30px;
        display: inline-block;
    }

    .sponsor-vip{
        max-width: 280px !important;
        max-height: 160px;
    }

    .sponsor-super{
        max-width: 220px !important;
    }

    .sponsor-partner{
        max-width: 130px !important;
    }

    .row-sponsor{
        margin-bottom: 60px;
    }

    .row-sponsor:last-child{
        margin-bottom: 0;
    }

    @media all and (max-width: 768px){
        .sponsor-img{
            display: inline-block;
            margin: 10px auto;
        }

        .sponsor-vip{
            display: block !important;
            max-width: 90% !important;
            margin: 40px auto !important;
        }

        .sponsor-super{
            max-width: 44% !important;
            margin: 15px 5px;
        }

        .sponsor-partner{
            max-width: 20% !important;
        }

        .row-sponsor{
            margin-bottom: 10px;
        }

        .box-sponsor-logoList{
            padding: 40px !important;
        }
    }
</style>