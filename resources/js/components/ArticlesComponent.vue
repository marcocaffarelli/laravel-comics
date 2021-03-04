<template>
    <div class="container_articles">
        <h2>MUST READS</h2>
        <div class="container_cards_articles d-flex">
            <div class="card_articles " v-if="index < 3" v-for="(article,index) in articles">
                <div class="card_article_image">
                    <img :src="`storage/${article.cover}`" alt="">
                </div>
                <div class="card_article_message">
                    {{article.message}}
                </div>  
                <div class="card_article_title">
                    {{article.title}}
                </div>
                <div class="card_article_body">
                    {{article.body}}
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
         data(){
            return {
                articles: "",
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/articles').then(response => {
                console.log(response);
                this.articles = response.data.response;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
