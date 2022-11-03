<template>
  <div>
    <form @submit.prevent="send">
      <p>
        <input class="p-2 " type="text"  v-model="name" placeholder="il tuo nome">
        <small v-if="errors.name">
        <span v-for="(error, index) in errors.name" :key="index" >{{error}}</span></small>
      </p>
      <p>
        <input class="p-2 " type="email"  v-model="email" placeholder="la tua mail">
        <small v-if="errors.email">
        <span v-for="(error, index) in errors.email" :key="index" >{{error}}</span></small>
      </p>
      <p>
        <textarea class="p-2" v-model="message"  id="" cols="30" placeholder="il tuo messaggio" rows="3"></textarea>
        <small v-if="errors.text">
        <span v-for="(error, index) in errors.text" :key="index" >{{error}}</span></small>
      </p>
      <input type="submit" value="invia">
    </form>
    
  </div>
</template>
<script>

export default {
  data(){
    return {
      name: '',
      email: '',
      message: '',
      errors: {}
    }
  },
  methods:{
    send(){
      const data = {
        name: this.name,
        email: this.email,
        message: this.message,
      }
      axios.post('/api/leads',data).then(res =>{
        console.log(res.data)
      }).catch(err =>{
        console.log(err.response)
        const { errors } = err.response.data
        this.errors = errors
      })
    }
  }
}
</script>