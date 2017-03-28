<template>
  <div class="landing container">
    <intro></intro>
    <about-jwc></about-jwc>
    <role-selection></role-selection>
    <schedule></schedule>
    <guru></guru>
    <jwc-map></jwc-map>
    <gallery></gallery>
    <faq></faq>
    <supporter></supporter>
  </div>
</template>

<script>
import Intro from '../components/landing/Intro';
import AboutJWC from '../components/landing/AboutJWC'
import RoleSelection from '../components/landing/RoleSelection'
import Schedule from '../components/landing/Schedule'
import Guru from '../components/landing/Guru'
import Map from '../components/landing/Map'
import Gallery from '../components/landing/Gallery'
import FAQ from '../components/landing/FAQ'
import Supporter from '../components/landing/Supporter'

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
    Supporter
  }
}
</script>

<style lang="css" scoped>
  .landing {
    text-align: center;
  }
</style>