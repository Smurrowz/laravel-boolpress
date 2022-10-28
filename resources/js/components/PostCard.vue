<template>
  <div>  

    <h2>{{ post.title }}</h2>
    <p>{{ post.date }}</p>
    <img v-if="post.cover" width="200px" :src="pathImg+post.cover">
    <p v-if="post.category">{{ post.category.name }}  </p> -->
    <p v-if="post.tags"><span v-for="(tag, index) in post.tags" :key="index">{{ tag.name }}  </span></p>
  </div>
</template>
<script>

export default {
  name: 'PostCard',
  data() {
    return {
      posts: [],
      pathImg: 'http://127.0.0.1:8000/Storage/',
    }
  },

  props: ['post'],
}
</script>
<style lang="scss" scoped>

</style>