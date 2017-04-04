<template>
    <div class="bg-character" style="transform: scale(0.8, 0.8)">
  <div class="containe-fluidr">
    <div class="col-md-3 about-role">
      <h1>Designer</h1>
      <p>Quis ad cillum cupidatat adipisicing. Magna veniam duis minim consectetur aliqua minim aute sit irure occaecat velit. Enim cupidatat nisi aliquip aute et elit ullamco excepteur voluptate dolor ea laborum magna. Quis est ea elit ut proident incididunt ullamco. Laboris ullamco commodo consectetur irure amet anim cillum magna aliquip Lorem. Officia reprehenderit ullamco eu anim labore occaecat amet culpa aute officia excepteur labore. Officia voluptate amet minim ut culpa nostrud quis commodo aliqua laborum ex dolor mollit.</p>
    </div>
    <div style="transform: scale(0.8, 0.8)" class="col-md-4 col-md-offset-1 presenter-stage">
        <div style="background-image: url('img/characters/Light-Design.png" class="presenter-light">
            <img class="presenter-body" src="/img/characters/Human_Design.png">
        </div>
        <div style="width: 300px; height: 80px; background: white; margin: 30px auto;">
            Join
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1 role-selector">
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
    .bg-character{
        background: url('/img/characters/bg-character.png');
        background-size: cover;
        background-position: center;
        min-height: 900px;
    }
    .role-selector{
        margin-top: 120px;
    }
    .presenter-stage{
        position: relative;
    }
    .presenter-light{
        background-size: 100% 100vh;
        background-position: center;
        background-repeat: no-repeat;
        height: 80%;
    }
    .presenter-body{
        max-width: 60%;
        min-height: 755px;
        height: 100vh;
        padding-top: 60px;
        padding-bottom: 15px;
    }
</style>