<template>
  <div>
    <section>
      <div class="container">
        <img v-if="post.cover" :src="`http://127.0.0.1:8000/Storage/${post.cover}`" :alt="post.title">
        <h1>{{post.title}}</h1>
        <h4>{{post.category?.name}}</h4>
        <p>{{post.content}}</p>
        <p>{{post.date}}</p>
        <p v-if="post.tags"><Tags :tags="post.tags"></Tags></p>
        
        
      </div>
    </section>
  </div>
</template>
<script>
import Tags from '../components/Tags.vue';
export default{
  components: {
    Tags,
  },
  props: ['slug'],
  data(){
    return {
      post: {}
    }
  },
  methods:{
    fetchPosts(){
      const slug = this.$route.params.slug;
      axios.get(`/api/posts/${slug}`).then(res => {
        console.log(res.data)
        const { post } = res.data
        this.post = post
        
        // salva post in this.post
      }).catch(err =>{
        console.log(err)
        this.$router.replace({name: '404'})
      })
    }
  },
  beforeMount(){
    this.fetchPosts();
  }
}
</script>
<style lang="scss" scoped>
</style>