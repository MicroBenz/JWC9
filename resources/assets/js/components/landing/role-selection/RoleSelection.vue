<template>
  <div class="container">
    <div class="col-md-4 about-role">
      <h1>Designer</h1>
      <p>Quis ad cillum cupidatat adipisicing. Magna veniam duis minim consectetur aliqua minim aute sit irure occaecat velit. Enim cupidatat nisi aliquip aute et elit ullamco excepteur voluptate dolor ea laborum magna. Quis est ea elit ut proident incididunt ullamco. Laboris ullamco commodo consectetur irure amet anim cillum magna aliquip Lorem. Officia reprehenderit ullamco eu anim labore occaecat amet culpa aute officia excepteur labore. Officia voluptate amet minim ut culpa nostrud quis commodo aliqua laborum ex dolor mollit.</p>
    </div>
    <div class="col-md-4">
      <h1>PIC</h1>
    </div>
    <div class="col-md-4">
      <role-selector
        :role="roleConfig.designer.name"
        :description="roleConfig.designer.shortDescription"
        :imgSrc="roleConfig.designer.imgSrc"
      ></role-selector>
      <role-selector
        :role="roleConfig.content.name"
        :description="roleConfig.content.shortDescription"
        :imgSrc="roleConfig.content.imgSrc"
      ></role-selector>
      <role-selector
        :role="roleConfig.marketing.name"
        :description="roleConfig.marketing.shortDescription"
        :imgSrc="roleConfig.marketing.imgSrc"
      ></role-selector>
    </div>
  </div>
</template>

<script>
import RoleSelector from './RoleSelector';
import roleConfig from '../../../configs/role';

export default {
  data() {
    return {
      roleConfig,
    };
  },
  components: {
    RoleSelector
  }
}
</script>

<style lang="scss" scoped>
  .about-role {
    text-align: left;
  }
</style>