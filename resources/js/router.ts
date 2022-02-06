import { createRouter, createWebHistory } from 'vue-router'
import ExamplePage from './pages/ExamplePage.vue'

const routes = [
  {
    path: '/',
    name: 'ExamplePage',
    component: ExamplePage,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
