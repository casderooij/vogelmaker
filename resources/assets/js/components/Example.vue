<template>
  <div class="container">
    <div class="title">Example Component</div>

    <div class="shoutout">
      I'm an example component!
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style media="screen">
  .container {
    font-weight: bold;
  }
</style>
