<template>
  <div>
    <button @click="increment">Increment</button>
    <button @click="decrement">Decrement</button>
  </div>
</template>

<script>
  import {mapMutations} from 'vuex';
  // import {mapActions} from 'vuex';
  export default {
    methods: {
      ...mapMutations([
        'increment',
        'decrement'
      ])
      // increment() {
      //   // this.$emit('updated', 1);
      //   this.$store.state.counter++;
      // },
      // decrement() {
      //   // this.$emit('updated', -1);
      //   this.$store.state.counter--;
      // }

    }
  }
</script>
