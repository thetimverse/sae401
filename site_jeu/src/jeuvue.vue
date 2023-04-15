<script setup>

import { ref, watch,computed, onMounted } from 'vue'
import axios from 'axios'
import carte from '../src/components/carte.vue'
import indice from '../src/components/indice.vue'

//router

import { useRouter } from 'vue-router'
const route = useRouter()


//data
let APIData = ref([])
let IDpartie = ref()
let IDuser = ref()

onMounted(async () => {
    //paramêtre de l'url
    // ID partie
    
    // IDpartie.value = route.params.IDpartie
    // console.log(IDpartie.value)

    // ID joueur
    // iduser.value = route.params.IDuser
    // console.log(IDjoueur.value)  


    //récupération des données de l'api
    async function getAPIData() {
        let response = await axios.get('http://localhost:8088/sae401/index.php/api/parties/' + IDpartie.value)
        console.log(APIData.value)
        APIData.value = response.data
        return APIData.value
    }

    // execution de l'api start + toute les 3s
    APIData.value = await getAPIData()
    setInterval(() => {
        APIData.value =  getAPIData()
    }, 3000);
})

async function tourfin () {
    let API = this.APIData
    // API.tour = API.tour + 1  (a testez pour le nb de tour)
    API.Nbcarteverte = null
    API.Indice = null
    axios.patch(`http://localhost:8088/sae401/index.php/api/parties/${this.IDpartie}`,API, {
        headers: {
            'Content-Type': 'application/merge-patch+json'
        }
        .then(response => {
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        })
    })
}


</script>

<template>
<div>
    <section>
        <div>
            <carte :APIData="APIData" :IDpartie="IDpartie" :IDuser="IDuser" :Fintour="tourfin" />
            <indice :APIData="APIData" :IDpartie="IDpartie" :IDuser="IDuser" :Fintour="tourfin" />
        </div>
    </section>
</div>

</template>
