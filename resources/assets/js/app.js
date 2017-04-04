require('./bootstrap');
import VueRouter from 'vue-router';
import vueScrollTo from 'vue-scroll-to';

import Landing from './pages/Landing.page.vue';
import Register from './pages/Register.page.vue';
import store from './store/index';
// import 'loaders.css';

Vue.use(VueRouter);
Vue.use(vueScrollTo);
const router = new VueRouter({
  base: __dirname,
  routes: [
    { path: '/', component: Landing },
    { path: '/register', component: Register },
  ],
  mode: 'history'
})

Vue.component('app', require('./components/App.vue'));
Vue.component('loader', require('./components/Loader.vue'));

const app = new Vue({
  router,
  store
}).$mount('#app')
