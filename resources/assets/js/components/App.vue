<template>
  <div>
    <apps-nav></apps-nav>
    <social-group-button></social-group-button>
    <router-link to="/">To Landing</router-link>
    <router-link to="/register">To Register</router-link>
    <router-view></router-view>
  </div>
</template>
<script>
import AppsNav from './nav/Nav';
import SocialGroupButton from './social-button/SocialGroupButton';

export default {
  components: {
    AppsNav,
    SocialGroupButton
  }
}
</script>
