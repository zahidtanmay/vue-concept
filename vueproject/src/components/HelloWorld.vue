<template>
  <div>
    <h1>{{msg}}</h1>
    <user></user>
    <router-link :to="{ path: '/vuedal'}" replace>Vuedal</router-link>
    <router-link :to="{ path: '/vuelidate'}" replace>Vuelidate</router-link>
    <!--<button @click="showIt()">Show me the money</button>-->
  </div>
</template>

<script>
  import User from './User'
export default {
    data: function () {
        return {msg: "hello Vuedal"}

    },
    components:{
        User
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
