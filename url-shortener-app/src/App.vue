

<template>
  <div id="app">
    <router-link to="/">Shorten URL</router-link>
    <router-link to="/urls">URLs List</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "App",
};
</script>
