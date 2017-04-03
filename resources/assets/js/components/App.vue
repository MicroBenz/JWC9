<template>
  <div class="apps-container">
    <div v-if="isFacebookApiReady">
      <social-group-button></social-group-button>
      <router-view></router-view>
    </div>
    <loader v-else></loader>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

import AppsNav from './nav/Nav';
import SocialGroupButton from './social-button/SocialGroupButton';

export default {
  computed: mapGetters({
    isFacebookApiReady: 'isFacebookApiReady'
  }),
  mounted() {
    window.fbAsyncInit = () => {
      FB.init({
        appId: '1540852432838036',
        cookie: true,
        xfbml: true,
        version: 'v2.1',
      });
      console.log(this.$store);
      FB.getLoginStatus((loginStatus) => {
        console.log(loginStatus);
        this.$store.dispatch('facebookApiIsReady');
        if (loginStatus.status === 'connected') {
          console.log('connected');
          this.$store.dispatch('setLogin');
          this.$store.dispatch('setAccessToken', loginStatus.authResponse.accessToken);
        }
        else {
          console.log('not login');          
          this.$store.dispatch('setNotLogin');          
        }
      })
    };
    ((d, s, id) => {
      let js = d.getElementsByTagName(s)[0];
      const fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=113717632497937';
      fjs.parentNode.insertBefore(js, fjs);
    })(document, 'script', 'facebook-jssdk');
  },
  components: {
    AppsNav,
    SocialGroupButton
  }
}
</script>

<style lang="scss" scoped>
  .apps-container {
    width: 100%;
    height: 100%;
    overflow-y: scroll;
  }
</style>