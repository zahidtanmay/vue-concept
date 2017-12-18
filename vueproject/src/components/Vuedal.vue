<template>
    <div>
        hi its me
        <vuedal></vuedal>
    </div>
</template>

<script>

    import Vdal from './Vdal'
    import {default as Vuedals, Component as Vuedal, Bus as VuedalsBus} from 'vuedals';

    export default {

        components: {Vuedal},
        data: function(){
            return {
                msg: ""
            }

        },
        mounted: function () {
            console.log("component mounted")
            VuedalsBus.$emit('new', {
                component: Vdal
            })
        },

    }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
