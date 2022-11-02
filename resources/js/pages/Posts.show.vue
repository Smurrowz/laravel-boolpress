<template>
  <div>
    <section>
      <div class="container">
        <h1>pagina di dettaglio del post</h1>
        <p>{{$route.params.slug}}</p>
      </div>
    </section>
  </div>
</template>
<script>
export default{
  methods:{
    fetchPosts(){
      const slug = this.$route.params.slug;
      axios.get(`/api/posts/${slug}`).then(res => {
        console.log(res.data)
      }).catch(err =>{
        console.log(err)
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