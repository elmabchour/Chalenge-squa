<!-- src/components/ShortenedUrlsList.vue -->

<template>
    <div>
      <h2>Shortened URLs List</h2>
      <ul>
        <li v-for="url in shortenedUrls" :key="url.id">
          <a :href="url.original_url" target="_blank">{{ url.short_url }}</a>
          <span>Clicks: {{ url.click_count }}</span>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    data() {
      return {
        shortenedUrls: [],
      };
    },
    created() {
      this.fetchShortenedUrls();
    },
    methods: {
      fetchShortenedUrls() {
        axios
          .get("/api/http://127.0.0.1:8000")
          .then((response) => {
            this.shortenedUrls = response.data;
          })
          .catch((error) => {
            console.error(error);
          });
      },
    },
  };
  </script>
  