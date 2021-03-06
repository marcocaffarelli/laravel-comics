<template>
    <div class="container_classics">
        <h2>CURRENT SERIES</h2>
        <div class="container_cards_classics d-flex">
            <div class="card_classics " v-if="index < 12" v-for="(classic,index) in classics">
                <div class="card_classic_image">
                    <img :src="`storage/${classic.cover}`" alt="">
                </div>
                <div class="card_classic_title">
                    {{classic.title}}
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
         data(){
            return {
                classics: "",
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/classics').then(response => {
                console.log(response);
                this.classics = response.data.response;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
