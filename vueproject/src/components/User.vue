<template>
    <div id="user">
        <h1>The User Component</h1>
        <p>I am an awesome user</p>

            <user-details></user-details>
            <user-edit></user-edit>
            <!--<user-details></user-details>-->
    </div>
</template>

<script>
    import UserDetails from './UserDetails.vue'
    import UserEdit from './UserEdit.vue'

    export default{
        components: {
            'user-details': UserDetails,
            'user-edit': UserEdit
        }
    }
</script>

<style>
    #user{
        background-color: aquamarine;
        padding: 25px;
    }
</style>