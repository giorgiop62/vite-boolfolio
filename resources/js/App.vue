<script>
export default {
  name: "App",
  data() {
    return {
      baseUrl: "http://127.0.0.1:8000/api/",
      posts: []
    }
  },
  methods: {
    getApi() {
      axios.get(this.baseUrl + "posts")
      .then(result=>{
        this.posts = result.data.posts;
        console.log(this.posts);
      })
    }
  },
  mounted() {
    this.getApi();
  },
};
</script>

<template>
  <div class="container">
    <h1>Elenco post</h1>
    <div  v-for="post in posts" :key="post.id" class="post-box">
      <h3>{{ post.title }}</h3>
      <p>{{ post.text }}}</p>
    </div>
  </div>
</template>

<style>
</style>
