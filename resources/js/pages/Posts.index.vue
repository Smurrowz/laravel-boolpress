<template>
  <div>
  <section>
     <div class="container">
      <div class="row row-cols-3 justify-content-around ">
        <router-link :to="{name: 'posts.show', params: {slug: post.slug}}" v-for="post in this.posts" :key="post.id">
        
          <PostCard class="post-card col" :post="post"></PostCard>
        </router-link>

      </div>

    </div>
  </section>
  </div>
</template>
<script>
import PostCard from '../components/PostCard.vue'
export default {
  data() {
    return {
      title: 'sup',
      posts: []
    }
  },
  components: {
    PostCard
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
<style scoped lang="scss">

.post-card{
  border: 1px solid black;
  border-radius: 14px;
  text-align: center;
}


</style>