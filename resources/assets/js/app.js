require('./bootstrap');
import VueRouter from 'vue-router';
import Landing from './pages/Landing.page.vue';
import Register from './pages/Register.page.vue';

Vue.use(VueRouter);
const router = new VueRouter({
  base: __dirname,
  routes: [
    { path: '/', component: Landing },
    { path: '/register', component: Register },
  ]
})

Vue.component('app', require('./components/App.vue'));

const app = new Vue({
  router
}).$mount('#app')
