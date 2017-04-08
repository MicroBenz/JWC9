<template>
  <div class="role-selector" v-on:click="onSelect">
    <h2>{{role}}</h2>
    <p>{{selected}}</p>    
    <p>{{description}}</p>
  </div>
</template>

<script>
export default {
  props: [
    'role',
    'description',
    'selected',
    'onSelect'
  ],
  methods: {
    onSelectRole() {
      console.log('select');
      this.onClick();
    }
  }
}
</script>

<style lang="scss" scoped>
.role-selector {
  background-color: white;
  color: black;
  margin: 10px;
  padding: 10px;
}
</style>
