<template>
      <div class="container_card">

        <div class="card_comics" v-if="index < 5" v-for="(comic,index) in comics">
            <div class="card_image">
                <img :src="`storage/${comic.cover}`" alt="">
            </div>
                  
            <div class="card_title">
                {{comic.title}}
            </div>
            <div class="available">
                AVAILABLE NOW
            </div>
            <h5>COMIC BOOK</h5>
        </div>

    </div>
</template>

<script>
    export default {
         data(){
            return {
                comics: "",
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/comics').then(response => {
                console.log(response.data.response);
                this.comics = response.data.response;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
