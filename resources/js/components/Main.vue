<template>
    <div id="root">
        
        <div class="container-lg">
            <div class="row">
                <PostCard v-for="post in posts" :key="post.id" :post="post" />
            </div>
        </div>
    
    </div>
</template>

<script>
import axios from 'axios'
import PostCard from './PostCard.vue'
    export default {
        
    name: "Main",
    components: { PostCard },
    data: function () {
        return {
            posts: [],
            activePage: 1,
        };
    },
    methods: {
        getPosts() {
        
            axios.get("/api/posts")
                .then(response => {
                this.posts = response.data.results.data;
                console.log(this.posts);
            })
                .catch(error => {
                console.log(error);
            });
        },
    },
    created() {
        this.getPosts()
    }, 
}


</script>

<style>
</style>