<script setup>
</script>

<template>
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