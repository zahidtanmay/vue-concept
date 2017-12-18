<script src="https://unpkg.com/vue"></script>


<div id="app-5">
  <p>{{ message }}</p>
  <button v-on:keyup="reverseMessage">Reverse Message</button>
</div>




<script>

var app2 = new Vue({
  el: '#app-2',
  data: {
    message: 'You loaded this page on ' + new Date()
  }
})

app2.message = 'some new message'

</script>