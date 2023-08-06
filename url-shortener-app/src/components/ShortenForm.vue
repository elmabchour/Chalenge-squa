<!-- src/components/ShortenForm.vue -->

<template>
    <div>
      <form @submit.prevent="shortenUrl">
        <input v-model="originalUrl" type="url" placeholder="Enter long URL" required />
        <button type="submit">Shorten</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    data() {
      return {
        originalUrl: "",
      };
    },
    methods: {
      shortenUrl() {
        axios
          .post("/api/http://127.0.0.1:8000", { original_url: this.originalUrl })
          .then((response) => {
            console.log(response.data);
          })
          .catch((error) => {
            console.error(error);
          });
      },
    },
  };
  </script>
  