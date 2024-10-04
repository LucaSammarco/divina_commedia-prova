import { createRouter, createWebHistory } from 'vue-router';
import Cantiche from '../views/Cantiche.vue';
import Canti from '../views/Canti.vue';
import Versi from '../views/Versi.vue';

const routes = [
  {
    path: '/',
    name: 'cantiche',
    component: Cantiche, // Vista per mostrare tutte le cantiche
  },
  {
    path: '/cantica/:canticaId',
    name: 'canti',
    component: Canti, // Vista per mostrare i canti di una cantica
  },
  {
    path: '/cantica/:canticaId/canto/:cantoId',
    name: 'versi',
    component: Versi, // Vista per mostrare i versi di un canto
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
