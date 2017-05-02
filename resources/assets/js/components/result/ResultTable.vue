<template>
<div>
  <h1 class="role">{{role}}</h1>
  <table class="table">
    <thead v-bind:class="[
      'table-header',
      role === 'Content' ? 'content-header' : '',
      role === 'Designer' ? 'design-header' : '',      
      role === 'Marketing' ? 'marketing-header' : '',
    ]">
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
@import '../../../sass/_variables.scss';

.role {
  text-transform: uppercase;
  font-size: 60px;
  padding-bottom: 15px;
}
.table {
  background-color: white;
  color: black;
  font-size: 22px;
  text-align: left;
  .table-header {
    font-weight: bold;
    color: white;
  }
  .content-header {
    background-color: $content-color;
  }
  .design-header {
    background-color: $design-color;
  }
  .marketing-header {
    background-color: $marketing-color;  
  }
}
</style>
