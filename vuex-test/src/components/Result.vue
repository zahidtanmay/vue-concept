<template>
  <div>
    <p>counter is: {{counter}}</p>
  </div>
</template>
<script>
  export default {
  //   props:['counter']
  computed: {
    counter(){
      return this.$store.state.counter;
    }
  }
  }
</script>
