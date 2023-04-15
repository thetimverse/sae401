<script>
import axios from 'axios'

let ID = 0
export default {
  name: "carte.vue",
  props: {
    APIData: {
      // type: object,
      required: true
    },
    IDpartie:{
      required: true
    },
    IDuser:{
      required: true
    },
    Fintour:{
      required: true,
      type: Function
    }
  },
  data(){
    return{
      findepartie: false
    }
  },
  methods: {
    test(){
      console.log(this.findepartie)
    },
    OnclickCard(index) {
      if (this.plateauJ2[index].colonne === 'vert'){
        this.APIData.cartes[index].sitrouver = 'trouver'
      }
      if (this.plateauJ2[index].colonne === 'neutre' && (this.APIData.cartes[index].sitrouver === 'pins' || this.APIData.cartes[index].sitrouver === 'shield')){
        this.APIData.cartes[index].sitrouver = 'jeton'
        this.fintour()
      }
      axios.patch(`http://localhost:8088/sae401/index.php/api/parties/${this.IDpartie}`,this.APIData, {
        headers: {
          'Content-Type': 'application/merge-patch+json'
        }
      })
      .then(response => {
        console.log(response.data);
      })
      .catch(error => {
        console.log(error);
      });
        
    }
  },

watch: {
    APIData: {
      handler: function (newVal) {
        const cartesverte = []
        newVal.cartes.forEach((carte, index) =>{
            if (this.plateauJ1[index].colonne === 'vert' && this.plateauJ2[index].colonne === 'vert'){
              cartesverte.push(carte)
            }
        })
        if (newVal.cartes.every(carte => carte.sitrouver === 'trouver')){
          this.findepartie = true
        }
          else{
            this.findepartie = false
          }
        
      },
      deep: true
    }
},
    computed: {
    plateauJ1(){
        return this.IDuser == 1
        ? this.APIData.plateauJ1
        : this.APIData.plateauJ2
    },
    plateauJ2(){
        return this.IDuser == 2
        ? this.APIData.plateauJ2
        : this.APIData.plateauJ1
    },
    motinidice(){
        return (this.APIData.indice === undefined || this.APIData.indice === '' || this.APIData.indice === null) 
    },
    

    }
}
</script>

<template>
<div class="cartes-containers">
  <div :class="`cartes ${function(){}}`">  
    <div class="carte-wrap" v-for="(nom_BD_carte, index) in APIData.nom_BD_carte" :key="index" @click="cartetrouver(index)" :class="`${plateau_actif [index]['colonne']} ${nom_BD_cartes.nom_BD_sitrouver}`">
      <div class="carte">
        <transition name="tromper"><img v-if="nom_BD_carte.nom_BD_sitrouver === 'pins'" src="imgde ton machin" alt="pins" class="pins"/> </transition>
        <transition name="trouver">
            <div v-if="nom_BD_carte.nom_BD_sitrouver === 'shield'" class="shield_card_me"> </div> 
        </transition>
        <h3 @click="test" {{nom_BD_carte.mot}}></h3>
      </div>
    </div>
  </div>
</div> 
</template>

<style scoped>

</style>