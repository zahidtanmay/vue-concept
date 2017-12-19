<template>
  <div>
    {{msg}}
    <!--:counter = "counter"-->
    <!--@updated="counter +=$event"-->
    <app-result ></app-result>
    <app-another-result></app-another-result>
    <app-counter></app-counter>

  </div>
</template>

<script>
  import Result from './components/Result';
  import Counter from './components/Counter';
  import AnotherResult from './components/AnotherResult';

  export default {
    components: {
      appCounter: Counter,
      appResult: Result,
      appAnotherResult: AnotherResult
    },
    data () {
      return {
        // counter: 0,
        msg: 'Welcome to Your Vue.js App'
      }
    }
  }
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }

  h1, h2 {
    font-weight: normal;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }
</style>
