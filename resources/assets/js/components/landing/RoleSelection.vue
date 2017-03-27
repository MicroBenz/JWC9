<template>
  <div>
    <h1>RoleSelection</h1>
    <button v-on:click="navigateToRegister('designer')">Designer</button>
    <button v-on:click="navigateToRegister('content')">Content</button>
    <button v-on:click="navigateToRegister('marketing')">Marketing</button>    
  </div>
</template>

<script>
import VueRouter from 'vue-router';

const router = new VueRouter();

export default {
  methods: {
    navigateToRegister(role) {
      console.log(role);
      router.push(`/register/${role}`);
    }
  }
}
</script>
