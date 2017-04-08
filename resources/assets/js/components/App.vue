<template>
  <div class="apps-container">
    <div v-if="isFacebookApiReady">
      <transition name="fade">
        <router-view></router-view>
      </transition>
    </div>
    <loader v-else></loader>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

// import HamburgerMenu from './menu/HamburgerMenu';
// import SocialGroupButton from './social-button/SocialGroupButton';

export default {
    data(){
        return {
            facebookInfo: {},
            facebookAccessToken: ''
        }
    },
    computed: mapGetters({
        isFacebookApiReady: 'isFacebookApiReady'
    }),
    mounted() {
        window.fbAsyncInit = () => {
            FB.init({
                appId: '1540852432838036',
                cookie: true,
                xfbml: true,
                version: 'v2.7',
            });
            /*console.log(this.$store);
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
            });

            FB.login(function(response) {
                if (response.authResponse) {
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function(response) {
                        facebookInfo = response
                        axios.post('/authen/marketing', {
                            access_token: response,
                            lastName: 'Flintstone'
                        }).then(function (response) {
                                console.log(response);
                        }).catch(function (error) {
                            console.log(error);
                        });
                        console.log('Good to see you, ' + response.name + '.');
                    });
                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            });*/
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
    methods: {
        facebookLogin(){
            let component = this
            FB.login(function(response) {
                if (response.authResponse) {
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function(response) {
                        component.facebookInfo = response
                        console.log('Good to see you, ' + response.name + '.');
                        component.facebookGetLoginStatus()
                    });
                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            });
        },
        facebookGetLoginStatus(){
            var component = this
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                    // the user is logged in and has authenticated your
                    // app, and response.authResponse supplies
                    // the user's ID, a valid access token, a signed
                    // request, and the time the access token
                    // and signed request each expire
                    component.facebookAccessToken = response.authResponse.accessToken;
                } else if (response.status === 'not_authorized') {
                    // the user is logged in to Facebook,
                    // but has not authenticated your app
                } else {
                    // the user isn't logged in to Facebook.
                }
            });
        },

        setFacebookInfo (info) {
            this.facebookInfo = info
        },

        authen(team){
            const filter = ['design', 'content', 'marketing']
            for(let i = 0; i < 3; i++){
                if(team == filter[i]){
                    console.log(this.facebookAccessToken)
                    axios.post('/authen/'+team, {
                        access_token: this.facebookAccessToken
                    }).then(function(res){
                        console.log("Fuck Yeah!")
                    })
                }
            }
        }
    },
//   components: {
//     'apps-menu': HamburgerMenu,
//     SocialGroupButton
//   }
}
</script>

<style lang="scss" scoped>
    .fade-enter-active, .fade-leave-active {
    transition: opacity .5s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
    opacity: 0
    }
  .apps-container {
    width: 100%;
    height: 100%;
    overflow-y: scroll;
  }
</style>