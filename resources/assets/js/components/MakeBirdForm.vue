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

    <bird-image v-bind:image="legImg"></bird-image>
    <bird-image v-bind:image="wingImg"></bird-image>
    <bird-image v-bind:image="headImg"></bird-image>
    <bird-image v-bind:image="bodyImg"></bird-image>

  </div>
</template>

<script>
import SelectBird from './SelectBird.vue';
import BirdImage from './BirdImage.vue';

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
