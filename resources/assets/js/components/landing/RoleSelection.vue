<template>
  <div class="bg-character">
    <h1>เลือกอาชีพ</h1> 
    <div class="role-selection-wrapper">
      <div class="role-selection-item">
        <role-selector
          :on-select="onSelect.bind(this, 'marketing')"
          role="Marketing"
          description="Amet aute sunt nostrud ea irure quis. Duis do exercitation fugiat irure nostrud esse dolore. Do id reprehenderit deserunt qui commodo deserunt mollit et ut."
          :selected="this.selectedRole === 'marketing'">
        </role-selector>
      </div>
      <div class="role-selection-item">
        <role-selector
          :on-select="onSelect.bind(this, 'content')"
          role="Content Creator"
          description="Amet aute sunt nostrud ea irure quis. Duis do exercitation fugiat irure nostrud esse dolore. Do id reprehenderit deserunt qui commodo deserunt mollit et ut."
          :selected="this.selectedRole === 'content'">
        </role-selector>
      </div>
      <div class="role-selection-item">
        <role-selector
          :on-select="onSelect.bind(this, 'design')"
          role="Designer"
          description="Amet aute sunt nostrud ea irure quis. Duis do exercitation fugiat irure nostrud esse dolore. Do id reprehenderit deserunt qui commodo deserunt mollit et ut."
          :selected="this.selectedRole === 'design'">
        </role-selector>
      </div>
    </div>
    <button class="btn btn-primary register-button" v-on:click="navigateToRegister" v-if="this.selectedRole !== 'none'">สมัครสาขา {{selectedRole}}</button>
    <button class="btn btn-primary register-button" disabled="disabled" v-if="this.selectedRole === 'none'">โปรดทำการเลือกสาขา</button>    
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import VueRouter from 'vue-router';
import axios from 'axios';

import RoleSelector from './RoleSelector';

const router = new VueRouter();

export default {
  
  computed: mapGetters({
    isLoggedIn: 'isLoggedIn',
    accessToken: 'accessToken',
  }),
  data() {
    return {
      selectedRole: 'none',
    }
  },
  methods: {
    onSelect(role) {
      this.selectedRole = role;
    },
    navigateToRegister() {
      console.log(this.selectedRole, this.accessToken);
      axios.post(`/authen/${this.selectedRole}`, {
        access_token: this.accessToken
      })
      .then(
        (response) => {
          console.log(response);
        }
      )
      .catch(
        (error) => {
          console.error('Error while register:', error);
        }
      )
    }
  },
  components: {
    RoleSelector,
  }
}
</script>

<style lang="scss" scoped>
.role-selection-wrapper {
  display: flex;
  .role-selection-item {
    flex: 1;
  }
}
.register-button {
  background-color: #f9c832;
  border: none;
  border-radius: 30px;
  padding-left: 30px;
  padding-right: 30px;
}
</style>