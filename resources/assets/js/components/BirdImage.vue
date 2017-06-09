<template>
  <div>
    <img class="image" v-bind:src="image">
  </div>
</template>

<script>
export default {
  props: ['image'],
  data: function() {
    return {
    }
  }
}
</script>

<style>
  img {
    position: absolute;
    cursor: move;
  }
</style>
