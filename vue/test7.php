<script src="https://unpkg.com/vue"></script>

<div id="app">

<input type="number" v-on:input="change">
<input type="number" v-on:input="change1">
	<p>{{title}}</p>
	<br>
	<p>{{title1}}</p>

</div>

<script>
var app = new Vue({

		el:'#app',
		data:{
			title: '',
			title1:'Hello'
		},
		methods:{
			change: function(event1){
				this.title = event1.target.value;
			},
			change1: function(event2){
				this.title = event2.target.value;
			}
		}
	})
</script>