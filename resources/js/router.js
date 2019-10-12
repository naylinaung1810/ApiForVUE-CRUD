import Vue from 'vue'
import VueRouter from 'vue-router'
import Welcome from './components/Welcome'
import New_User from './components/New-User'

Vue.use(VueRouter)

export default new VueRouter({

    routes:
    [
        {
            path:'/',
            component:Welcome
        },
        {
            path:'/new-user',
            component:New_User
        }
    ]
})