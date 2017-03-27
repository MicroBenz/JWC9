<template>
  <div>
    <h1>Register</h1>
    <button v-on:click="selectRole('content')">Content</button>
    <button v-on:click="selectRole('designer')">Designer</button>
    <button v-on:click="selectRole('marketing')">Marketing</button>
    {{selectedRole}}
    <register-content v-if="selectedRole === 'content'"></register-content>
    <register-designer v-if="selectedRole === 'designer'"></register-designer>
    <register-marketing v-if="selectedRole === 'marketing'"></register-marketing>    
  </div>
</template>

<script>
  export default {
    data() {
      return {
        selectedRole: ''
      };
    },
    methods: {
      selectRole: function (role) {
        this.selectedRole = role;
      }
    }
  }
</script>
