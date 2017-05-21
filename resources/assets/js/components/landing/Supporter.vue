<template>
  <div class="sponsor-wrapper">
    <div class="sponsor-title">
      <h1 class="sponsor-eng">Sponsor</h1>
      <h1 class="sponsor-thai">สนับสนุนโดย</h1>
    </div>
    <div class="container">
      <div class="box-sponsor-logoList">
        <div class="row row-sponsor text-center">
            <a rel="nofollow" href="http://www.chandra.ac.th"><img class="img-responsive sponsor-img sponsor-vip sponsor-horizontal" src="/images/sponsor/svg/Chandrakasem.svg"></a>
            <a rel="nofollow" href="https://www.webmaster.or.th"><img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/svg/TWA.svg"></a>
            <a rel="nofollow" href="https://www.etda.or.th"><img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/svg/ETDA.svg"></a>
            <a rel="nofollow" href="https://www.cpall.co.th"><img class="img-responsive sponsor-img sponsor-vip sponsor-vip-float" src="/images/sponsor/svg/CP ALL.svg"></a>
            <a rel="nofollow" href="http://corporate.sanook.com"><img class="img-responsive sponsor-img sponsor-vip sponsor-vip-float sponsor-tencent" src="/images/sponsor/svg/Tencent.svg"></a>
            <a rel="nofollow" href="https://www.dek-d.com"><img class="img-responsive sponsor-img sponsor-vip sponsor-vip-float sponsor-dekd" src="/images/sponsor/svg/DekD.svg"></a>
        </div>
        <div class="row row-sponsor text-center row-sponsor-super-row1">
            <a rel="nofollow" href="http://www.uppercuz.com/brand"><img class="img-responsive sponsor-img sponsor-super sponsor-uppercuz" style="" src="/images/sponsor/svg/Uppercuz.svg"></a>
            <a rel="nofollow" href="https://www.pantip.com"><img class="img-responsive sponsor-img sponsor-super" src="/images/sponsor/svg/Pantip.svg"></a>
            <a rel="nofollow" href="http://www.pathosting.com"><img class="img-responsive sponsor-img sponsor-super" style="" src="/images/sponsor/svg/PT.svg"></a>
            <a rel="nofollow" href="https://www.camphub.in.th"><img class="img-responsive sponsor-img sponsor-super" src="/images/sponsor/svg/CampHUB.svg"></a>
            <a rel="nofollow" href="http://www.ondemand.in.th"><img class="img-responsive sponsor-img sponsor-super" id="logo-ondemand" src="/images/sponsor/svg/OnDemand.svg"></a>
            <a rel="nofollow" href="http://www.ondemand.in.th"><img class="img-responsive sponsor-img sponsor-super" id="logo-ondemand" src="/images/sponsor/svg/Provision.svg"></a>
        </div>
        <div class="row">
            <a rel="nofollow" href="https://www.02dual.com"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/02dual.svg"></a>
            <a rel="nofollow" href="https://lnw.co.th"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/LNW.svg"></a>
            <a rel="nofollow" href="http://moonshot.co.th"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/Moonshot.svg"></a>
            <a rel="nofollow" href="https://www.iurban.in.th/"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/iUrban.svg"></a>
            <a rel="nofollow" href="https://www.facebook.com/tutulivethailand/"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/TuTu Live.svg"></a>
            <a rel="nofollow" href="http://www.trueplookpanya.com/"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/True Plookpanya.svg"></a>
            <a rel="nofollow" href="https://wongnai.com"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/Wongnai.svg"></a>
            <a rel="nofollow" href="http://www.witty.co.th"><img class="img-responsive sponsor-img sponsor-partner sponsor-witty" src="/images/sponsor/svg/Witty.svg"></a>
            <a rel="nofollow" href="https://www.facebook.com/dekcomstorypage/"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/DekCom.svg"></a>
            <a rel="nofollow" href="http://www.dotarai.com"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/DotArai.svg"></a>
            <a rel="nofollow" href="https://thumbinthai.wordpress.com"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/Thumb.svg"></a>
            <a rel="nofollow" href="https://www.facebook.com/fabercastellthailandfan/"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/Faber-Castell.svg"></a>
            <a rel="nofollow" href="http://singha.com/singhadrinkingwater/"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/Singha.svg"></a>
        </div>
        <div class="row">
            <a rel="nofollow" href="http://www.lactasoy.com"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/Lactasoy.svg"></a>
            <a rel="nofollow" href="http://www.koh-kae.com/"><img class="img-responsive sponsor-img sponsor-partner" src="/images/sponsor/svg/Kohkae.svg"></a>
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
        max-width: 280px !important;
        max-height: 190px;
    }

    .sponsor-super{
        //max-width: 185px !important;
        max-width: 210px !important;
    }

    .sponsor-partner{
        max-width: 110px !important;
        margin: 10px;
    }

    .sponsor-pantip{
        max-height: 120px;
    }

    .sponsor-uppercuz{
        /*width: 260px !important;
        max-width: none !important;*/
        margin-top: 35px;
    }

    .sponsor-pat{
        width: 260px !important;
        max-width: none !important;
    }

    .sponsor-witty{
        max-width: 180px !important;
    }

    .sponsor-moonshot{
        max-width: 150px !important;
    }

    .row-sponsor{
        margin-bottom: 60px;
    }

    .row-sponsor:last-child{
        margin-bottom: 0;
    }

    @media all and (max-width: 768px){
        .row-sponsor-super-row1{
            margin-bottom: 30px !important;
        }

        .sponsor-img{
            display: inline-block;
            margin: 10px auto;
        }

        .sponsor-vip{
            display: block !important;
            max-width: 75% !important;
            margin: 40px auto !important;
        }

        .sponsor-super{
            display: inline-block;
            max-width: 45% !important;
            //margin: 15px 5px;
            margin: 10px 3px;
        }

        .sponsor-partner{
            max-width: 22% !important;
        }

        .row-sponsor{
            margin-bottom: 10px;
        }

        .box-sponsor-logoList{
            padding: 40px !important;
        }
    }
    @media all and (min-width: 768px){
        .sponsor-vip-float{
            float: left;
        }
        .sponsor-dekd{
            margin-top: 30px;
        }
        .sponsor-tencent{
            margin-top: 40px;
        }
    }
</style>