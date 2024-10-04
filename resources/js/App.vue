<script>
// Importa il componente HeaderComponent
import HeaderComponent from './components/HeaderComponent.vue';

export default {
  name: 'App',
  components: {
    HeaderComponent, // Registra il componente HeaderComponent
  },
};
</script>

<template>
    <HeaderComponent />
    <router-view></router-view>
</template>



  <style scoped>

  </style>
