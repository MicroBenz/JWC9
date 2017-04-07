<template>
  <div class="landing">
    <intro class="intro"></intro>
    <about-jwc></about-jwc>
    <role-selection></role-selection>
    <schedule></schedule>
    <guru></guru>
    <jwc-map></jwc-map>
    <gallery></gallery>
    <faq></faq>
    <supporter></supporter>
    <social-banner></social-banner>
  </div>
</template>

<script>
import Intro from '../components/landing/intro/Intro';
import AboutJWC from '../components/landing/about-jwc/AboutJWC'
import RoleSelection from '../components/landing/role-selection/RoleSelection'
import Schedule from '../components/landing/schedule/Schedule'
import Guru from '../components/landing/Guru'
import Map from '../components/landing/map/Map'
import Gallery from '../components/landing/Gallery'
import FAQ from '../components/landing/FAQ'
import Supporter from '../components/landing/Supporter'
import SocialBanner from '../components/landing/SocialBanner';

export default {
  components: {
    Intro,
    'about-jwc': AboutJWC,
    RoleSelection,
    Schedule,
    Guru,
    'jwc-map': Map,
    Gallery,
    faq: FAQ,
    Supporter,
    SocialBanner
  }
}
</script>

<style lang="css" scoped>
  .intro{
    min-height: 100vh;
  }
  .landing {
    text-align: center;
  }
  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s
  }
  .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
    opacity: 0
  }
</style>