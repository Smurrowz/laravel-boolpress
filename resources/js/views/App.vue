<template>
  <div>
    <div class="container">
      <div class="row row-cols-3 justify-content-around ">

        <PostCard class="post-card col" v-for="post in this.posts" :key="post.id" :post="post"></PostCard>
      </div>

    </div>
  </div>
</template>


<script>
import PostCard from '../components/PostCard.vue';
export default {
  components: {
    PostCard
  },
  data() {
    return {
      title: 'sup',
      posts: []
    }
  },
  methods: {
    fetchPosts() {
      axios.get('/api/posts').then((res) => {
        this.posts = res.data.posts
        console.log("i post sono i seguenti:", this.posts)

      })
    }
  },
  beforeMount() {
    this.fetchPosts();
    
  }
}

</script>


<style lang="scss" scoped>
.post-card{
  border: 1px solid black;
  border-radius: 14px;
  text-align: center;
}

</style>