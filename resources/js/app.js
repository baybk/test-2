import {createApp} from 'vue';
import App from './App.vue';
import router from './router'
import {createStore} from 'vuex';
import auth_module from './vuex_store/auth/index';

const app = createApp(App);

const store = createStore({
    modules: {
        auth_module: auth_module
    }
});

app.use(store);
app.use(router);
app.mount("#app");