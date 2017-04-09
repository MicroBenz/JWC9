require('./bootstrap');
import VueRouter from 'vue-router';
import vueScrollTo from 'vue-scroll-to';
//import VueScrollTo from 'vue-scrollto'

import Landing from './pages/Landing.page.vue';
import Register from './pages/Register.page.vue';
import PageNotFound from './pages/404.page.vue';
// import SocialGroupButton from './components/social-button/SocialGroupButton.vue';
// import HamburgerMenu from './components/menu/HamburgerMenu.vue';
import Profile from './components/registers/Profile.Register.vue';
import Contact from './components/registers/Contact.Register.vue';
import Other from './components/registers/Other.Register.vue';
import GeneralQuestion from './components/registers/GeneralQuestion.Register.vue';
import Designer from './components/registers/roles/Designer.Register.vue';
import Content from './components/registers/roles/Content.Register.vue';
import Marketer from './components/registers/roles/Marketing.Register.vue';
import store from './store/index';
import Confirm from './components/registers/Confirm.Register.vue';
import Success from './components/registers/Success.Register.vue';
import SuccessLock from './components/registers/Success.Lock.Register.vue';
// import 'loaders.css';

Vue.use(VueRouter);
Vue.use(vueScrollTo);
//Vue.use(VueScrollTo);

const router = new VueRouter({
  base: __dirname,
  routes: [
    { path: '/', component: Landing },
    { path: 'success', component: Success},
    {
      path: '/register',
      component: Register,
      children: [
          {
            path: '/',
            component: Profile
          },
          {
            path: 'step1',
            component: Profile
          },
          {
            path: 'step2',
            component: Contact
          },
          {
            path: 'step3',
            component: Other
          },
          {
            path: 'step4',
            component: GeneralQuestion
          },
          {
            path: 'step5-design',
            component: Designer
          },
          {
            path: 'step5-content',
            component: Content
          },
          {
            path: 'step5-marketing',
            component: Marketer
          },
          {
            path: 'step6',
            component: Confirm
          },
          {
            path: 'step7',
            component: Success
          },
          {
            path: 'success',
            component: SuccessLock
          }
        ]
      },
      { path: '*', component: PageNotFound }
  ],
  mode: 'history'
})

Vue.component('app', require('./components/App.vue'));
Vue.component('loader', require('./components/Loader.vue'));
Vue.component('apps-menu', require('./components/menu/HamburgerMenu.vue'));
Vue.component('social-group-button', require('./components/social-button/SocialGroupButton.vue'));

const app = new Vue({
  router,
  store
}).$mount('#app')
