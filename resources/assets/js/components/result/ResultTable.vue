<template>
<div>
  <h1 v-bind:class="[
    'role',
    role === 'Content' ? 'content' : '',
    role === 'Designer' ? 'design' : '',      
    role === 'Marketing' ? 'marketing' : '',
  ]">{{role}}</h1>
  <table class="table">
    <thead v-bind:class="[
      'table-header',
      role === 'Content' ? 'content-header' : '',
      role === 'Designer' ? 'design-header' : '',      
      role === 'Marketing' ? 'marketing-header' : '',
    ]">
      <tr>
        <td v-if="!noid">ID</td>
        <td>ชื่อ</td>
        <td v-if="!noid">จำนวนเงิน</td>
      </tr>
    </thead>
    <tbody>
      <tr v-for="camper in campers">
        <td v-if="!noid">{{camper.id}}</td>
        <td>{{camper.name}}</td>
        <td v-if="!noid">{{camper.price}}</td>
      </tr>
    </tbody>
  </table>
</div>
</template>

<script>
export default {
  props: ['campers', 'role', 'noid'],
}
</script>

<style lang="scss">
@import '../../../sass/_variables.scss';

.role {
  text-transform: uppercase;
  font-size: 45px;
  font-weight: 800;
  padding-bottom: 9px;
  text-shadow: 1px 1px 2px rgba(0,0,0, 0.2);
  &.content {
    color: $content-color;
  }
  &.design {
    color: $design-color;
  }
  &.marketing {
    color: $marketing-color;
  }
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
