import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

createApp({
  el: '#app',
  components: {
    App,
  },
  template: '<App />',
})
  .use(router)
  .mount('#app')
