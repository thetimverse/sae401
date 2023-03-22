<template>
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
        <img src="img/marvel_other.svg" alt="Pins Marvel autre joueur">
      </div>
      <p>Roulette</p>
    </div>

    <!-- DEUXIEME LIGNE -->
    <div class="card neutral_card">
      <div class="pins pins_two">
        <img src="img/marvel_other.svg" alt="Pins Marvel pour l'autre joueur">
        <img src="img/marvel_me.svg" alt="Pins Marvel pour moi">
      </div>
      <p>Roulette</p>
    </div>
    <div class="card blue_card">
      <div class="pins"></div>
      <p>Roulette</p>
    </div>
    <div class="card neutral_card">
      <div class="pins pins_me">
        <img src="img/marvel_me.svg" alt="Pins Marvel pour moi">
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
</template>

<style>
.plateau {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.plateau>p {
  text-align: center;
  padding: 10px;
  background-color: white;
  border-radius: 5px;
  margin-bottom: 30px;
  width: 500px;
  font-family: 'Inter', sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 15px;
  letter-spacing : .5px;
}

.jeu {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: repeat(5, 1fr);
  grid-column-gap: 10px;
  grid-row-gap: 10px;
  height: 600px;
  width: 870px;
}

.card {
  height: 100px;
  width: 154px;
}

.card p {
  font-family: 'Inter', sans-serif;
  text-transform: uppercase;
  font-size: 15px;
  font-weight: 600;
  display: flex;
  align-items: flex-end;
  padding: 10px;
  justify-content: center;
  letter-spacing: .5px;
}

.blue_card {
  background: url('img/blue_card.svg') no-repeat;
}

.neutral_card {
  background: url('img/neutral_card.svg') no-repeat;
}

.black_card {
  background: url('img/black_card.svg') no-repeat;
  color: white;
}

.shield_card_me {
  background: url('img/shield_card_me.svg') no-repeat;
}

.shield_card_other {
  background: url('@/assets/img/shield_card_other.svg') no-repeat;
}

.hydra_card_me {
  background: url('img/hydra_card_me.svg') no-repeat;
}

.hydra_card_other {
  background: url('img/hydra_card_other.svg') no-repeat;
}

.pins {
  display: flex;
  height: 59px;
  width: 154px;
  padding: 10px;
}

.pins_me {
  justify-content: flex-end;
}

.pins_two {
  justify-content: space-between;
}
</style>
