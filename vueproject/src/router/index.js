import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Vuedal from '@/components/Vuedal'
import Vuelidate from '@/components/Vuelidate'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Hello',
            component: HelloWorld
        },
        {
            path: '/vuedal',
            name: 'vuedal',
            component: Vuedal
        },
        {
            path: '/vuelidate',
            name: 'vuelidate',
            component: Vuelidate
        },

    ]
})
