<template>
 <header>
  <nav class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        LOGO
      </div>
      <ul  class="d-flex align-items-center ">
        <li v-for="(link, index) in navLinks" :key="index"><router-link :to="{name: link.name}">{{link.text}}</router-link></li>
        
        
      </ul>

    </div>
  </nav>
 </header>
</template>


<script>
export default{
  data(){
    return {
      navLinks: [
        {
          text: 'Home',
          path: '/',
          name: 'home',
        },
        {
          text: 'Chi siamo',
          path: '/chi-siamo',
          name: 'about-us',
        },
        {
          text: 'Blog',
          path: '/blog',
          name: 'posts.index',
        },
        {
          text: 'Contatti',
          path: '/contatti',
          name: 'contact-us',
        },
      ]
    }
  }
}
</script>



<style lang="scss" scoped>
ul{
  list-style-type: none;
  & li{
    margin-right: 10px;
  }
}

</style>