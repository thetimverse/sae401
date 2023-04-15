<script>
import { ref, watch,computed, onMounted } from 'vue'
import axios from 'axios'


export default{
    name: "indice.vue",
    data(){
        return{
            mot: '',
            nombre:""
        }
    },
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

    methods: {
        async envoyerindice(){
            this.APIData.indice = this.mot
            this.APIData.nombre = this.nombre
            axios.patch(`http://localhost:8088/sae401/index.php/api/parties/${this.IDpartie}`,this.APIData, {
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
    },
    computed: {
        indicerecup(){
            return (this.APIData.indice === undefined || this.APIData.indice === null || this.APIData.indice === '')
        }
    }
}

</script>

<template>

    <!-- j1 donne un indice -->
    <div v-if="indicerecup && APIData.user == IDuser" class="indice">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Indice" aria-label="Indice" aria-describedby="basic-addon2" v-model="mot">
            <input type="number" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon2" v-model="nombre">
            <div class="input-group-append">
                <button  type="button" @click="envoyerindice">Envoyer</button>
            </div>
        </div>
    </div>
</template>