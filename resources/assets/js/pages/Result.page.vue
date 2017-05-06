<template>
<div class="result-page">
  <img class="logo" src="../components/landing/logo.png">
  <instruction></instruction>
  <div class="banner">
    <h1>ประกาศผลค่าย JWC ครั้งที่ 9</h1>
  </div>
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
  <!--<div v-on:click="login()" class="confirm-btn">ยืนยันสิทธิ์</div>-->
  <div class="banner">
    <h1>รายชื่อตัวสำรอง</h1>
  </div>
  <div class="container">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="backup.content" role="Content" v-bind:noid="true"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="backup.design" role="Designer" v-bind:noid="true"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="backup.marketing" role="Marketing" v-bind:noid="true"></result-table>
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
    content: [],
    marketing: [],
    design: [],
    backup: {
      content: [],
      marketing: [],
      design: [],
    }
  }),
  mounted() {
    axios.get('/api/results')
      .then(
        ({ data }) => {
          const { contents, markets, designs } = data;
          this.content = contents
            .map(({ camper }) => ({
              name: `${camper.FirstName} ${camper.LastName}`,
            }))
            .slice(0, 14)
            .sort((a, b) => {
              if(a.name < b.name) return -1;
              if(a.name > b.name) return 1;
              return 0;
            })
            .map((camper, i) => ({
              id: i + 1 < 10 ? `C0${i + 1}` : `C${i + 1}`,
              name: camper.name,
              price: i + 1 < 10 ? `200.0${i + 1}` : `200.${i + 1}`,
            }))
          this.design = designs
            .map(({ camper }) => ({
              name: `${camper.FirstName} ${camper.LastName}`,
            }))
            .slice(0, 14)
            .sort((a, b) => {
              if(a.name < b.name) return -1;
              if(a.name > b.name) return 1;
              return 0;
            })
            .map((camper, i) => ({
              id: `D${i + 15}`,
              name: camper.name,
              price: `200.${i + 15}`,
            }))
          this.marketing = markets
            .map(({ camper }) => ({
              name: `${camper.FirstName} ${camper.LastName}`,
            }))
            .slice(0, 14)
            .sort((a, b) => {
              if(a.name < b.name) return -1;
              if(a.name > b.name) return 1;
              return 0;
            })
            .map((camper, i) => ({
              id: `M${i + 29}`,
              name: camper.name,
              price: `200.${i + 29}`,
            }))

          this.backup.content = contents.map((camper) => ({
            name: `${camper.camper.FirstName} ${camper.camper.LastName}`,
          })).slice(15);
          this.backup.marketing = markets.map((camper) => ({
            name: `${camper.camper.FirstName} ${camper.camper.LastName}`,
          })).slice(15);
          this.backup.design = designs.map((camper) => ({
            name: `${camper.camper.FirstName} ${camper.camper.LastName}`,
          })).slice(15);
        }
      )
  },
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

.logo {
  height: 350px;
}
.container {
  margin-top: 35px;
  margin-bottom: 35px;
}
.banner {
  background-color: $brown;
  color: $yellow;
  max-width: 75%;
  min-width: 500px;
  border-radius: 50px;
  margin: 0 auto;
  padding-top: 10px;
  padding-bottom: 5px;
  h1 {
    font-weight: 800;
    font-size: 54px;
    line-height: 78px;
    @media(max-width: 768px) {
      font-size: 45px;
      line-height: 55px;
    }
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
    margin-bottom: 55px;
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