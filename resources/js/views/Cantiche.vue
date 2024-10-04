<script>
import axios from 'axios';

export default {
  name: 'Cantiche',
  data() {
    return {
      cantiche: [], // Array per contenere la lista delle cantiche
    };
  },
  created() {
    this.fetchCantiche(); // Chiama la funzione quando il componente viene montato
  },
  methods: {
    fetchCantiche() {
      // Esegui una richiesta GET per ottenere la lista delle cantiche dall'API
      axios.get('http://localhost:8000/api/cantiche')
        .then(response => {
          // Assegna i dati delle cantiche all'array cantiche
          this.cantiche = response.data;
        })
        .catch(error => {
          console.error('Errore durante il recupero delle cantiche:', error);
        });
    },
  },
};
</script>

<template>
    <div>
      <h1>Lista delle Cantiche</h1>
      <ul>
        <!-- V-for per visualizzare tutte le cantiche -->
        <li v-for="cantica in cantiche" :key="cantica.id">
          <!-- Usa router-link per navigare alla pagina dei canti di quella cantica -->
          <router-link :to="{ name: 'canti', params: { canticaId: cantica.id } }">
            {{ cantica.nome }}
          </router-link>
        </li>
      </ul>
    </div>
  </template>

<style scoped>
/* Stile per la pagina */
ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin: 10px 0;
}

a {
  color: #3490dc;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
</style>
