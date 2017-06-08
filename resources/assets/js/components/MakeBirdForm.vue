<template>
  <div class="container">
    <p>
      This new bird has earned the legs of a
      <select-bird v-bind:allBirds="allBirds" @clicked="onClickLeg"></select-bird>
       and uses the wings of a
       <select-bird v-bind:allBirds="allBirds" @clicked="onClickWing"></select-bird>
       . On top of that you can recognize it by its
       <select-bird v-bind:allBirds="allBirds" @clicked="onClickHead"></select-bird>
        head. All these parts are stuck to the body of a
       <select-bird v-bind:allBirds="allBirds" @clicked="onClickBody"></select-bird>.
    </p>
    <img v-bind:src="legImg" alt="">
    <img v-bind:src="wingImg" alt="">
    <img v-bind:src="headImg" alt="">
    <img v-bind:src="bodyImg" alt="">
  </div>
</template>

<script>
import SelectBird from './SelectBird.vue';

    export default {
      data() {
        return {
          allBirds: [],
          legImg: null,
          wingImg: null,
          headImg: null,
          bodyImg: null
        }
      },
      mounted() {
        axios.get('/api/all-birds').then(response => this.allBirds = response.data);
      },
      methods: {
        onClickLeg: function(value) {
          this.legImg = this.allBirds[value].legs_img;
        },
        onClickWing: function(value) {
          this.wingImg = this.allBirds[value].wing_img;
        },
        onClickHead: function(value) {
          this.headImg = this.allBirds[value].head_img;
        },
        onClickBody: function(value) {
          this.bodyImg = this.allBirds[value].body_img;
        }
      }
    }
</script>

<style>

</style>
