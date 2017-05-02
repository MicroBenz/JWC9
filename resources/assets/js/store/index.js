import Vue from 'vue';
import Vuex from 'vuex';

import auth from './modules/auth';
import register from './modules/register';
import approve from './modules/approve';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    auth,
    register,
    approve
  }
});
