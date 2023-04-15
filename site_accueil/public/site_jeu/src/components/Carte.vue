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
      if (this.couleur_j1[index].colonne === 'vert'){
        this.APIData.cartes[index].trouver = 'trouver'
      }
      if (this.couleur_j2[index].colonne === 'neutre' && (this.APIData.cartes[index].trouver === 'pins' || this.APIData.cartes[index].trouver === 'shield')){
        this.APIData.cartes[index].trouver = 'jeton'
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
            if (this.couleur_j1[index].colonne === 'vert' && this.couleur_j2[index].colonne === 'vert'){
              cartesverte.push(carte)
            }
        })
        if (newVal.cartes.every(carte => carte.trouver === 'trouver')){
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
    couleur_j1(){
        return this.IDuser == 1
        ? this.APIData.couleur_j1
        : this.APIData.couleur_j2
    },
    couleur_j2(){
        return this.IDuser == 2
        ? this.APIData.couleur_j2
        : this.APIData.couleur_j1
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
    <div class="carte-wrap" v-for="(mot_partie, index) in APIData.mot_partie" :key="index" @click="cartetrouver(index)" :class="`${plateau_actif [index]['colonne']} ${mot_partie.mot_partie.trouver}`">
      <div class="carte">
        <transition name="tromper"><img v-if="mot_partie.mot_partie.trouver === 'pins'" src="imgde ton machin" alt="pins" class="pins"/> </transition>
        <transition name="trouver">
            <div v-if="mot_partie.mot_partie.trouver === 'shield'" class="shield_card_me"> </div> 
        </transition>
        <h3 @click="test" {{mot_partie.mot_id}}></h3>
      </div>
    </div>
  </div>
</div> 
</template>

<style scoped>

</style>