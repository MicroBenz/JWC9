<template>
  <div class="landing">
    <intro></intro>
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
import Intro from '../components/landing/Intro';
import AboutJWC from '../components/landing/AboutJWC'
// import RoleSelection from '../components/landing/RoleSelection'
import RoleSelection from '../components/landing/role-selection/RoleSelection'
import Schedule from '../components/landing/Schedule'
import Guru from '../components/landing/Guru'
import Map from '../components/landing/Map'
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
  .landing {
    text-align: center;
  }
</style>