<script setup>
  import  Header from './components/Header.vue'
  import Plateau from './components/Plateau.vue'
  import Score from './components/Score.vue'
  import Historique from './components/Historique.vue'
</script>

<template>
  <Header />
  <main>
    <Score />
    <Plateau />
    <Historique />
  </main>
</template>

<style scoped>

</style>
