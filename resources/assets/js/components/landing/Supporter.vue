<template>
  <div class="sponsor-wrapper">
    <div class="sponsor-title">
      <h1 class="sponsor-eng">Sponsor</h1>
      <h1 class="sponsor-thai">สนับสนุนโดย</h1>
    </div>
    <div class="container">
      <div class="box-sponsor-logoList">
        <div class="row row-sponsor text-center">
            <a rel="nofollow" href="https://www.webmaster.or.th"><img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/twa2.png"></a>
            <a rel="nofollow" href="http://www.chandra.ac.th"><img class="img-responsive sponsor-img sponsor-vip sponsor-horizontal" src="/images/sponsor/vip/Chandrakasem.gif"></a>
        </div>
        <div class="row row-sponsor text-center">
            <a rel="nofollow" href="http://www.sanook.com"><img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/sanook.png"></a>
            <a rel="nofollow" href="https://www.dek-d.com"><img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/DekD.png"></a>
        </div>
        <div class="row row-sponsor text-center row-sponsor-super-row1">
            <a rel="nofollow" href="https://www.pantip.com"><img class="img-responsive sponsor-img sponsor-super sponsor-horizontal" src="/images/sponsor/super/Pantip.png"></a>
            <a rel="nofollow" href="http://www.uppercuz.com/brand"><img class="img-responsive sponsor-img sponsor-super sponsor-uppercuz" style="" src="/images/sponsor/super/Uppercuz.png"></a>
            <a rel="nofollow" href="http://www.pathosting.com"><img class="img-responsive sponsor-img sponsor-super sponsor-pat" style="" src="/images/sponsor/super/P and T.png"></a>
        </div>
        <div class="row row-sponsor text-center">
            <a rel="nofollow" href="https://www.camphub.in.th"><img class="img-responsive sponsor-img sponsor-super" src="/images/sponsor/super/CampHUB.png"></a>
            <a rel="nofollow" href="http://www.ondemand.in.th"><img class="img-responsive sponsor-img sponsor-super" id="logo-ondemand" src="/images/sponsor/super/OnDemand.png"></a>
        </div>
        <div class="row">
            <a rel="nofollow" href="https://lnw.co.th"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/partner/LNW.png"></a>
            <a rel="nofollow" href="https://www.02dual.com"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/partner/02dual.png"></a>
            <a rel="nofollow" href="https://thumbinthai.wordpress.com"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/partner/Thumb.png"></a>
            <a rel="nofollow" href="http://www.witty.co.th"><img class="img-responsive sponsor-img sponsor-partner sponsor-witty" src="/images/sponsor/partner/Witty.png"></a>
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

    .sponsor-horizontal{
        transform: scale(0.85);
    }

    .sponsor-img{
        margin: auto 30px;
        display: inline-block;
        cursor: pointer;
    }

    .sponsor-vip{
        max-width: 340px !important;
        max-height: 190px;
    }

    .sponsor-super{
        //max-width: 185px !important;
        max-width: 230px !important;
    }

    .sponsor-partner{
        max-width: 90px !important;
    }

    .sponsor-pantip{
        max-height: 120px;
    }

    .sponsor-uppercuz{
        width: 260px !important;
        max-width: none !important;
        margin-top: 15px;
    }

    .sponsor-pat{
        width: 260px !important;
        max-width: none !important;
    }

    .sponsor-witty{
        max-width: none !important;
        max-height: 40px;
    }

    .row-sponsor{
        margin-bottom: 60px;
    }

    .row-sponsor:last-child{
        margin-bottom: 0;
    }

    @media all and (max-width: 768px){
        .row-sponsor-super-row1{
            margin-bottom: -50px !important;
        }

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
            display: block;
            max-width: 60% !important;
            //margin: 15px 5px;
            margin: 50px auto;
        }

        .sponsor-partner{
            max-width: 30% !important;
            margin: 20px;
        }

        .row-sponsor{
            margin-bottom: 10px;
        }

        .box-sponsor-logoList{
            padding: 40px !important;
        }
    }
</style>