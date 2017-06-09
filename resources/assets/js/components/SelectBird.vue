<template>
  <div class="select-container">
    <select id="select" @change="getValue">
      <option disabled selected value></option>
      <option v-for="bird in allBirds" v-bind:value="bird.id">{{ bird.eng_name }}</option>
    </select>
  </div>
</template>

<script>
    export default {
      props: ['allBirds'],
      data: function() {
        return {
          value: null
        }
      },
      mounted() {

      },
      methods: {
        getValue: function(e) {
          this.value = Number(e.target.value);
          this.$emit('clicked', this.value - 1);
        }
      }
    }
</script>

<style scoped>
  .select-container {
    border-bottom: 3px dashed #85FFC7;
      width: 120px;
      overflow: hidden;
  }

  select {
    padding: 5px 8px;
    width: 100%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
  }

  select:focus {
      outline: none;
  }
</style>
