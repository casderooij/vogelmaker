<template>
  <div class="--select-bird-container">
    <button class="--select-bird-select-button" @click="listToggle = !listToggle">{{name}}</button>
    <ul class="--select-bird-select-list" style="list-style-type:none">
      <li class="--select-bird-select-item" v-show="listToggle" v-for="bird in allBirds">
        <button class="--select-bird-select-item-button" @click="getValue" v-bind:name="bird.eng_name" v-bind:value="bird.id">{{bird.eng_name}}</button>
      </li>
    </ul>
  </div>
</template>

<script>
    export default {
      props: ['allBirds'],
      data: function() {
        return {
          value: null,
          name: '.........',
          listToggle: false
        }
      },
      mounted() {

      },
      methods: {
        getValue: function(e) {
          this.value = Number(e.target.value);
          this.name = String(e.target.name);
          this.listToggle = false;
          this.$emit('clicked', this.value - 1);
        }
      }
    }
</script>

<style>
</style>
