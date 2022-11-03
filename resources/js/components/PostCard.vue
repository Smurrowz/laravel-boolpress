<template>
  <div>  

    <h2>{{ post.title }}</h2>
    <p>{{ post.date }}</p>
    <img v-if="post.cover" width="200px" :src="pathImg+post.cover">
    <p v-if="post.category">{{ post.category.name }}  </p> -->
    <p v-if="post.tags"><Tags :tags="post.tags"></Tags></p>
  </div>
</template>
<script>
import Tags from '../components/Tags.vue'

export default {
  components: {
    Tags,
  },
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