<script>
import axsios from "axios";
export default {
  name: "Blog",
  data() {
    return {
      baseUrl: "http://127.0.0.1:8000/api",
      posts: [],
    };
  },
  methods: {
    getApi() {
      axsios.get(this.baseUrl + "posts").then((result) => {
        this.posts = result.data.posts;
      });
    },
  },
  mounted() {
    this.getApi();
  },
};
</script>

<template>

  <h1>elenco post</h1>
    <div v-for="post in posts" :key="post.id" class="container">
        <h3>{{ post.title }}</h3>
        <p>{{ post.text }}</p>
    </div>

</template>



<style>
</style>
