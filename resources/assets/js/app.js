require('./bootstrap');
import VueRouter from 'vue-router';
import vueScrollTo from 'vue-scroll-to';
import Flatpickr from 'flatpickr';
import moment from 'moment';
// import VueFlatpickr from 'vue-flatpickr'
// import 'vue-flatpickr/theme/airbnb.css'
import 'flatpickr/dist/flatpickr.css';
import 'flatpickr/dist/themes/material_blue.css';
import { th } from 'flatpickr/dist/l10n/th.js';

Flatpickr.localize(th);
//import VueScrollTo from 'vue-scrollto'

import Landing from './pages/Landing.page.vue';
import Register from './pages/Register.page.vue';
import PageNotFound from './pages/404.page.vue';
import Result from './pages/Result.page.vue';
import Confirm from './pages/Confirm.page.vue';

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
import ConfirmRegis from './components/registers/Confirm.Register.vue';
import Success from './components/registers/Success.Register.vue';
import SuccessLock from './components/registers/Success.Lock.Register.vue';
// import 'loaders.css';

Vue.use(VueRouter);
Vue.use(vueScrollTo);
// Vue.use(VueFlatpickr);
//Vue.use(VueScrollTo);

const routes = [
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
          component: ConfirmRegis
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
    // { path: '/announce', component: Result },
    { path: '/this/is/very/secret/route/do/not/enter', component: Result },
    { path: '/confirm', component: Confirm },
    { path: '*', component: PageNotFound }
]

// if (moment().isAfter(moment('2017-05-06 21:00'))) {
//   routes.unshift(
//     {
//       path: '/announce',
//       component: Result
//     }
//   );
//   routes.unshift(
//     {
//       path: '/confirm',
//       component: Confirm,
//     }
//   );
// }
const router = new VueRouter({
  base: __dirname,
  routes,
  mode: 'history'
})

Vue.component('app', require('./components/App.vue'));
Vue.component('loader', require('./components/Loader.vue'));
Vue.component('apps-menu', require('./components/menu/HamburgerMenu.vue'));
Vue.component('social-group-button', require('./components/social-button/SocialGroupButton.vue'));
Vue.component('free-flag', require('./components/FreeFlag.vue'));

const app = new Vue({
  router,
  store
}).$mount('#app')
