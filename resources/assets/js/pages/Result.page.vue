<template>
<div class="result-page">
  <h1>ประกาศผลค่าย JWC ครั้งที่ 9</h1>
  <div class="container">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="content" role="Content"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="content" role="Designer"></result-table>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <result-table :campers="content" role="Marketing"></result-table>
    </div>
  </div>
</div>
</template>

<script>
import ResultTable from '../components/result/ResultTable';
export default {
  components: {
    ResultTable,
  },
  data: () => ({
    content: [
      { name: "ชื่อจริง ทดสอบนามสกุล", price: 200.01 },
      { name: "ชื่อจริง2 ทดสอบนามสกุล", price: 200.02 },
      { name: "ชื่อจริง3 ทดสอบนามสกุล", price: 200.03 },
      { name: "ชื่อจริง4 ทดสอบนามสกุล", price: 200.04 },
    ]
  })
}
</script>

<style lang="scss">
@import '../../sass/_variables.scss';

.result-page {
  @include background('/img/bg/blue.png');
  text-align: center;
  padding-top: 50px;
  padding-bottom: 50px;
}
</style>