<script>
import axios from 'axios';

export default {
  name: 'Canti',
  data() {
    return {
      cantica: {}, // Oggetto per contenere i dati della cantica e i suoi canti
    };
  },
  created() {
    this.fetchCanti(); // Chiama la funzione quando il componente viene montato
  },
  methods: {
    async fetchCanti() {
      try {
        // Esegui una richiesta GET per ottenere i canti della cantica selezionata
        const response = await axios.get(`http://localhost:8000/api/cantica/${this.$route.params.canticaId}/canti`);
        this.cantica = response.data; // Assegna i dati della cantica all'oggetto cantica
      } catch (error) {
        console.error('Errore durante il recupero dei canti:', error);
      }
    },
  },
};
</script>

<template>
    <div>
      <h1>Canti di {{ cantica.nome }}</h1>
      <ul>
        <!-- V-for per visualizzare tutti i canti della cantica selezionata -->
        <li v-for="canto in cantica.canti" :key="canto.id">
          <!-- Usa router-link per navigare alla pagina dei versi di quel canto -->
          <router-link :to="{ name: 'versi', params: { canticaId: cantica.id, cantoId: canto.id } }">
            {{ canto.titolo }}
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
