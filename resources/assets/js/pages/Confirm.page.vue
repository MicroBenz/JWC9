<template>
<div class="confirm-container">
  <h1>Confirm (Upload Slip)</h1>
  <p>{{token}}</p>
</div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  mounted() {
    if (this.$store.getters.accessToken === '') {
      this.$router.push('/');
    }
  },
  computed: mapGetters({
    token: 'accessToken',
  })
}
</script>

<style lang="scss">
@import '../../sass/_variables.scss';

.confirm-container {
  @include background('/img/bg/brown.png');
  text-align: center;
  padding-top: 50px;
  padding-bottom: 50px;
}
</style>
