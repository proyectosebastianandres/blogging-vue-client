import Vue from 'vue'
import Router from 'vue-router'

import Components from '@/views/Components'
import Login from '@/views/Login'
import Register from '@/views/Register'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/register',
      name: 'register',
      component: Register
    },
    {
      path: '/components/',
      name: 'components',
      component: Components
    }
  ]
})
