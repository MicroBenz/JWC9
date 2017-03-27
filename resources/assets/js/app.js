
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('subscribe', require('./components/Subscribe.vue'));
Vue.component('test', require('./components/Test.vue'))

Vue.component('app', require('./components/App.vue'));

// Register Component
Vue.component('register', require('./components/registers/Register.vue'));
Vue.component('register-content', require('./components/registers/roles/Content.Register.vue'));
Vue.component('register-designer', require('./components/registers/roles/Designer.Register.vue'));
Vue.component('register-marketing', require('./components/registers/roles/Marketing.Register.vue'));

const app = new Vue({
    el: '#app'
});
