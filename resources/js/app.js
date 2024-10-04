import './bootstrap'; // Assicurati che bootstrap.js esista e sia importato correttamente
import { createApp } from 'vue';
import App from './App.vue'; // Assicurati che il percorso verso App.vue sia corretto
import router from './router'; // Importa il router Vue

// Crea l'app Vue
const app = createApp(App);

// Usa il router nell'app Vue
app.use(router);

// Monta l'app Vue sull'elemento con ID "app"
app.mount('#app');
