<template>
<div class="result-page">
  <h1>ประกาศผลค่าย JWC ครั้งที่ 9</h1>
  <instruction></instruction>
  <div class="container">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="content" role="Content"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="design" role="Designer"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="marketing" role="Marketing"></result-table>
    </div>
  </div>
  <div v-on:click="login()" class="confirm-btn">ยืนยันสิทธิ์</div>
  <h2>รายชื่อตัวสำรอง</h2>
  <div class="container">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="content" role="Content"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="design" role="Designer"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="marketing" role="Marketing"></result-table>
    </div>
  </div>
</div>
</template>

<script>
import axios from 'axios';

import ResultTable from '../components/result/ResultTable';
import Instruction from '../components/result/Instruction';

export default {
  components: {
    ResultTable,
    Instruction
  },
  data: () => ({
    content: [
      { name: "ชื่อจริง ทดสอบนามสกุล", price: 200.01 },
      { name: "ชื่อจริง2 ทดสอบนามสกุล", price: 200.02 },
      { name: "ชื่อจริง3 ทดสอบนามสกุล", price: 200.03 },
      { name: "ชื่อจริง4 ทดสอบนามสกุล", price: 200.04 },
    ],
    marketing: [
      { name: "ชื่อจริง ทดสอบนามสกุล", price: 200.05 },
      { name: "ชื่อจริง2 ทดสอบนามสกุล", price: 200.06 },
      { name: "ชื่อจริง3 ทดสอบนามสกุล", price: 200.07 },
      { name: "ชื่อจริง4 ทดสอบนามสกุล", price: 200.08 },
    ],
    design: [
      { name: "ชื่อจริง ทดสอบนามสกุล", price: 200.09 },
      { name: "ชื่อจริง2 ทดสอบนามสกุล", price: 200.10 },
      { name: "ชื่อจริง3 ทดสอบนามสกุล", price: 200.11 },
      { name: "ชื่อจริง4 ทดสอบนามสกุล", price: 200.12 },
    ],
  }),
  methods: {
      login() {
        FB.login((response) => {
          if (response.authResponse) {
            console.log('facebook has login', response.authResponse);
            const fbToken = response.authResponse.accessToken;
            axios.post('/approve-authen', {
              access_token: fbToken,
            }).then(
              (authRes) => {
                console.log(authRes);
                this.$store.dispatch('setAccessToken', {
                  token: authRes.data.token
                });
                this.$router.push('/confirm');
              }
            )
          }
        })
      }
    }
}
</script>

<style lang="scss">
@import '../../sass/_variables.scss';
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
}

.confirm-btn:hover{
    margin-top: 13px;
    border-bottom: 3px solid #2455a7;
}

.result-page {
  @include background('/img/bg/blue.png');
  text-align: center;
  padding-top: 50px;
  padding-bottom: 50px;
}
</style>