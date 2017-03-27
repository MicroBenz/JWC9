import VueRouter from 'vue-router';
require('./bootstrap');

Vue.use(VueRouter);
const Home = { template: '<div>home</div>' }
const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', component: Home },
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar }
  ]
})

Vue.component('subscribe', require('./components/Subscribe.vue'));

Vue.component('app', require('./components/App.vue'));

// Register Component
Vue.component('register', require('./components/registers/Register.vue'));
Vue.component('register-content', require('./components/registers/roles/Content.Register.vue'));
Vue.component('register-designer', require('./components/registers/roles/Designer.Register.vue'));
Vue.component('register-marketing', require('./components/registers/roles/Marketing.Register.vue'));

const app = new Vue({
  router
}).$mount('#app')
