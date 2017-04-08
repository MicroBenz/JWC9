import Vue from 'vue';
import Vuex from 'vuex';

import auth from './modules/auth';
import register from './modules/register';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    auth,
    register
  }
});
