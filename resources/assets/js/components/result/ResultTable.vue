<template>
<div>
  <h1>{{role}}</h1>
  <table class="table">
    <thead>
      <tr>
        <td>ID</td>
        <td>ชื่อ</td>
        <td>จำนวนเงิน</td>
      </tr>
    </thead>
    <tbody>
      <tr v-for="camper in campers">
        <td>D01</td>
        <td>{{camper.name}}</td>
        <td>{{camper.price}}</td>
      </tr>
    </tbody>
  </table>
</div>
</template>

<script>
export default {
  props: ['campers', 'role'],
}
</script>

<style lang="scss">
.table {
  background-color: white;
  color: black;
  font-size: 22px;
}
</style>
