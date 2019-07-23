import Vue from 'vue'
import Router from 'vue-router'

import Components from '@/views/Components'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/components/',
      name: 'components',
      component: Components
    }
  ]
})
