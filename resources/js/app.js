import Vue from 'vue'
import VueRouter from 'vue-router'
import { routes } from './routes' //File routes.js
import App  from './components/App' //File App.vue

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes,
});
  
new Vue({
    el: '#app',
    router,
    render: h => h(App)
})
.$mount('#app');