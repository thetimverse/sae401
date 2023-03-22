<script setup>
</script>

<template>
  <header>
    <nav>
      <ul>
        <div><a href="popup.html">Joueur <i class="fa-solid fa-user"></i> 2</a></div>
        <div>
          <a href="recommencer.html">Recommencer</a>
          <a href="regles.html">Règles</a>
          <a href="compte.html">Julie <i class="fa-solid fa-user-astronaut user"></i></a>
        </div>
      </ul>
    </nav>
  </header>
  <main>
    <section class="score">
      <div>
        <h1>15</h1>
        <img src="assets/img/shield_card_me.svg" alt="">
      </div>
      <div>
        <h1>9</h1>
        <img src="assets/img/marvel_me.svg" alt="">
      </div>
    </section>
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
            <img src="assets/img/marvel_other.svg" alt="Pins Marvel autre joueur">
          </div>
          <p>Roulette</p>
        </div>

        <!-- DEUXIEME LIGNE -->
        <div class="card neutral_card">
          <div class="pins pins_two">
            <img src="assets/img/marvel_other.svg" alt="Pins Marvel pour l'autre joueur">
            <img src="assets/img/marvel_me.svg" alt="Pins Marvel pour moi">
          </div>
          <p>Roulette</p>
        </div>
        <div class="card blue_card">
          <div class="pins"></div>
          <p>Roulette</p>
        </div>
        <div class="card neutral_card">
          <div class="pins pins_me">
            <img src="assets/img/marvel_me.svg" alt="Pins Marvel pour moi">
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
      <div class="indice">
        <div>
          <input type="text" name="indice" id="indice" placeholder="Écris ton indice ici">
          <select type="number" name="nombre" id="nombre" placeholder="-">
            <option value="-">-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <input type="submit" name="submit" id="submit" value="Donner l'indice">
      </div>
    </section>
    <section class="chat">
      <h1>Historique</h1>
      <div>
        <p><span>User 1</span> a donné l'indice : <span>ABCD</span></p>
        <p><span>User 1</span> a donné l'indice : <span>ABCD</span></p>
        <p><span>User 1</span> a donné l'indice : <span>ABCD</span></p>
        <p><span>User 1</span> a donné l'indice : <span>ABCD</span></p>
      </div>
    </section>
  </main>
</template>

<style scoped>

</style>
