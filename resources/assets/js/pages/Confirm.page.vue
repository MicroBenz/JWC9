<template>
  <slip-uploader v-if="!isShowCongrat"></slip-uploader>
  <congratulation v-else></congratulation>  
</template>

<script>
import { mapGetters } from 'vuex';

import SlipUploader from '../components/confirm/SlipUploader';
import Congratulation from '../components/confirm/Congratulation';

export default {
  mounted() {
    console.log('TOKEN', this.token);
    if (this.token === '') {
      // this.$router.push('/');
    }
  },
  components: {
    SlipUploader,
    Congratulation
  },
  data: () => ({
    img: '',
    isShowCongrat: true, //Trigger upon user state
  }),
  computed: mapGetters({
    token: 'accessToken',
  })
}
</script>

<style lang="scss">
@import '../../sass/_variables.scss';

.confirm-title {
  font-weight: 600;
  color: $yellow;
}
.upload-btn:hover {
    margin-top: 0px;
}
.upload-btn {
    font-size: 32px;
    padding-left: 25px;
    padding-right: 25px;
    border-bottom: none;
    max-width: 400px;
}

.confirm-container {
  @include background('/img/bg/brown.png');
  text-align: center;
  padding-top: 50px;
  padding-bottom: 50px;
  .camper-detail {
    padding-top: 10px;
    padding-bottom: 10px;
    .pad-ref {
      padding-bottom: 30px;
      @media(max-width: 768px) {
        padding-bottom: 0px;
      }
    }
  }
  .slip-image {
    height: 350px;
    margin-top: 20px;
    margin-bottom: 20px;
    .slip-placeholder {
      background-color: white;
      border-radius: 50px;
      width: 350px;
      height: 350px;
      margin: 0 auto;
    }
    img {
      height: 100%;
    }
  }
  .confirm-btn {
    width: 200px;
    background: #3364a7;
    color: white;
    border-radius: 30px;
    border-bottom: 5px solid #1a40a7;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 20px;
    cursor: pointer;
    &:hover {
      margin-top: 13px;
      border-bottom: 3px solid #2455a7;
    }
  }
}

.status {
  display: inline-block;
  border: 1px solid white;
  padding: 9px 44px;
  border-radius: 12px;
  b {
    color: $yellow;
  }
}
</style>
