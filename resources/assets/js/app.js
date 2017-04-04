require('./bootstrap');
import VueRouter from 'vue-router';

import Landing from './pages/Landing.page.vue';
import Register from './pages/Register.page.vue';
import store from './store/index';
import Profile from './components/registers/Profile.Register.vue';
import Contact from './components/registers/Contact.Register.vue';
import Other from './components/registers/Other.Register.vue';
import GeneralQuestion from './components/registers/GeneralQuestion.Register.vue';
import Designer from './components/registers/roles/Designer.Register.vue';
import Content from './components/registers/roles/Content.Register.vue';
import Marketer from './components/registers/roles/Marketing.Register.vue';

// import 'loaders.css';

Vue.use(VueRouter);
const router = new VueRouter({
  base: __dirname,
  routes: [
    { path: '/', component: Landing },
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
              path: 'step5-designer',
              component: Designer
            },
            {
              path: 'step5-content',
              component: Content
            },
            {
              path: 'step5-marketer',
              component: Marketer
            }
            ]
       },
  ],
  mode: 'history'
})

Vue.component('app', require('./components/App.vue'));
Vue.component('loader', require('./components/Loader.vue'));

const app = new Vue({
  router,
  store
}).$mount('#app')
