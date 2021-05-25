<template>
    <div id="app">
        <Navbar></Navbar>
        <router-view></router-view>
    </div>
</template>

<script>
import './Styles/app.scss'
export default {
    name: 'app', 
    components: {
        Navbar: ()=> import('./Components/Navbar.vue'),
    }
}
</script>