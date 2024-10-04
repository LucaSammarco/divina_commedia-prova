<script>
  import axios from 'axios';

  export default {
    name: 'Versi',
    data() {
      return {
        canto: {}, // Oggetto per contenere il canto e i suoi versi
      };
    },
    created() {
      this.fetchVersi(); // Chiama la funzione quando il componente viene montato
    },
    methods: {
      async fetchVersi() {
        try {
          // Esegui una richiesta GET per ottenere i versi di un canto specifico
          const response = await axios.get(`http://localhost:8000/api/cantica/${this.$route.params.canticaId}/canto/${this.$route.params.cantoId}/versi`);
          this.canto = response.data; // Assegna i dati del canto all'oggetto canto
        } catch (error) {
          console.error('Errore durante il recupero dei versi:', error);
        }
      },
    },
  };
  </script>


<template>
    <div>
      <h1>Versi di {{ canto.titolo }}</h1>
      <ul>
        <!-- V-for per visualizzare i versi del canto -->
        <li v-for="verso in canto.versi" :key="verso.id">
          {{ verso.testo }} <!-- Mostra il testo del verso -->
        </li>
      </ul>
      <!-- Link per tornare alla lista dei canti della cantica -->
      <router-link :to="{ name: 'canti', params: { canticaId: canto.id_cantica } }">
        Torna ai canti
      </router-link>
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
    font-family: 'Courier New', Courier, monospace;
  }

  a {
    color: #3490dc;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }
  </style>
