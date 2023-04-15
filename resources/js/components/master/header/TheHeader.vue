<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="main-nav">
            <div class="container">
                <a href="" class="navbar-brand">
                <h4 class="d-inline align-middle text-primary">Healthy</h4>
                </a>
                <button class="navbar-toggler text-primary" style="border: none; color: orange;" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a v-if="false" href="" class="nav-link link-active">Summarize Database/API</a>
                        <a v-else href="" class="nav-link text-white">Summarize Database/API</a>
                    </li>

                    <li class="nav-item">
                        <a v-if="false" href="/api-description" class="nav-link link-active" target="_blank">Api Docs</a>
                        <a v-else href="/api-description" class="nav-link text-white" target="_blank">Apis Docs</a>
                    </li>

                    <li class="nav-item">
                        <router-link  v-if="false" to="/"  class="nav-link link-active">Recommended</router-link>
                        <router-link  v-else to="/" class="nav-link text-white">Recommended</router-link>
                    </li>
                    
                    <li v-if="!userIsAuth" class="nav-item">
                        <a href="" class="nav-link text-white" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>

                    <li v-if="userIsAuth"  class="nav-item">
                        <router-link to="/top-page" v-if="false" href="" class="nav-link link-active">Top Page</router-link>
                        <router-link to="/top-page" v-else href="" class="nav-link text-white">Top Page</router-link>
                    </li>

                    <li v-if="userIsAuth" class="nav-item">
                        <a v-if="false" href="" class="nav-link link-active">My Record</a>
                        <a v-else href="" class="nav-link text-white">My Record</a>
                    </li>
                    <li v-if="userIsAuth" class="nav-item">
                        <a href="" class="nav-link text-white" @click="logout">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
export default {
    inject: ['changeSelectedPage', 'selectedPage'],
    computed: {
        ...mapGetters(['userIsAuth'])
    },
    methods: {
        ...mapActions(['logout'])
    }
}
</script>