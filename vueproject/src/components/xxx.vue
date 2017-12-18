// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import Home from './components/HelloWorld'
import {default as Vuedals, Component as Vuedal, Bus as VuedalsBus} from 'vuedals';

Vue.use(Vuedals);

Vue.config.productionTip = false

/* eslint-disable no-new */


Vue.component('my-comp', Home);
Vue.component('vuedal', Vuedal);

new Vue({
el: '#app',
router,
render: h=>h(App)
})
