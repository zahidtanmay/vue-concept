<script src="https://unpkg.com/vue"></script>

<div id="app">

	<span>Sum : {{sum}}</span>
	<br>
	<label>Age:</label>
	<input type="number" v-model="val1">
	<br>
	<label>Salary:</label>
	<input type="number" v-model="val2">
	<br>
	<button v-on:click="calculateSum">Calculate</button>

</div>

<div id="app-4">

<h1>LIST</h1>
<hr>
	
	<ul>
		<li v-for="todo in todos">
		{{todo.text}}
		</li>
	</ul>
</div>

<script>
new Vue({
	el:'#app',
	data: {
		sum:0, 
		val1:0,
		val2:0
	},
	methods:{
		calculateSum: function(){
			return this.sum=this.val1 * this.val2;
		}
		

	}
})

var app4 = new Vue({
  el: '#app-4',
  data: {
    todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' },
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' },
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' },
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' }
    ]
  }
})
	
</script>