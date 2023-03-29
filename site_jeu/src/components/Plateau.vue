<script setup>
  import Indice from '/src/components/Indice.vue'
</script>

<template>
  <section class="plateau">
    <p>L'autre côté est en train de deviner</p>
    <div class="jeu">
      <!-- PREMIERE LIGNE -->
      <div class="card blue_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card blue_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card shield_card_other">
        <div class="pins"></div>
      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card neutral_card">
        <div class="pins pins_other">
          <img src="src/assets/img/marvel_other.svg" alt="Pins Marvel autre joueur">
        </div>
        <p>Roulette</p>
      </div>

      <!-- DEUXIEME LIGNE -->
      <div class="card neutral_card">
        <div class="pins pins_two">
          <img src="src/assets/img/marvel_other.svg" alt="Pins Marvel pour l'autre joueur">
          <img src="src/assets/img/marvel_me.svg" alt="Pins Marvel pour moi">
        </div>
        <p>Roulette</p>
      </div>
      <div class="card blue_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card neutral_card">
        <div class="pins pins_me">
          <img src="src/assets/img/marvel_me.svg" alt="Pins Marvel pour moi">
        </div>
        <p>Roulette</p>
      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card blue_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>

      <!-- TROISIEME LIGNE -->
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card shield_card_me">
        <div class="pins"></div>

      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>

      <!-- QUATRIEME LIGNE -->
      <div class="card hydra_card_me">
        <div class="pins"></div>

      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card black_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card blue_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card shield_card_me">
        <div class="pins"></div>

      </div>

      <!-- CINQUIEME LIGNE -->
      <div class="card blue_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card neutral_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card blue_card">
        <div class="pins"></div>
        <p>Roulette</p>
      </div>
      <div class="card hydra_card_other">
        <div class="pins"></div>

      </div>
    </div>
      <Indice />
  </section>
</template>