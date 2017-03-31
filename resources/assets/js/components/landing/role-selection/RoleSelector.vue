<template>
  <div class="character-card">
    <div class="character-des">
      <h1>{{role}}</h1>
      <p>{{description}}</p>
    </div>
    <div class="character-img">
      <img :src="imgSrc">
    </div>
  </div>
</template>

<script>
export default {
  props: [
    'role',
    'description',
    'imgSrc'
  ]
}
</script>

<style lang="scss" scoped>
h1 {
  margin: 0;
}
.character-card {
  display: flex;
  width: 100%;
  background-color: red;
  padding: 10px;
  border-radius: 15px;
  .character-des {
    text-align: left;
    flex: 1;
    h1, p {
      color: white;
    }
  }
}

.character-card .character-img img {
  width: 100%;
}

/* in case of หัวขาด */
// .character-card .character-img img {
//   position: relative;
//   top: -69px;
// }
</style>