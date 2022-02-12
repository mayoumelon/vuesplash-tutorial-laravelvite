import { createRouter, createWebHistory } from 'vue-router'
import PhotoList from './pages/PhotoList.vue'
import UserLogin from './pages/UserLogin.vue'

const routes = [
  {
    path: '/',
    name: 'PhotoList',
    component: PhotoList,
  },
  {
    path: '/login',
    name: 'UserLogin',
    component: UserLogin,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
