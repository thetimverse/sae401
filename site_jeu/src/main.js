import { createApp } from 'vue'
import App from './jeuvue.vue'
import router from './router'

import './assets/main.css'

const app = createApp(App)

app.use(router)

app.mount('#app')
