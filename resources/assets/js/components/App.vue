<template>
  <div>
    <apps-nav></apps-nav>
    <router-link to="/">To Landing</router-link>
    <router-link to="/register">To Register</router-link>    
    <router-view></router-view>
  </div>
</template>
<script>
import AppsNav from './nav/Nav';
export default {
  components: {
    AppsNav
  }
}
</script>
