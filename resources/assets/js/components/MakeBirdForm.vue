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

    <div class="image-container">
      <bird-image v-bind:image="bodyImg" class="draggable"></bird-image>
      <bird-image v-bind:image="legImg" class="draggable"></bird-image>
      <bird-image v-bind:image="wingImg" class="draggable"></bird-image>
      <bird-image v-bind:image="headImg" class="draggable"></bird-image>
    </div>
    <p>{{ newNames }}</p>
  </div>
</template>

<script>
import SelectBird from './SelectBird.vue';
import BirdImage from './BirdImage.vue';

var breakLatinName = function(name, index) {
  var newName = name.toLowerCase().replace(' ', '');
  var newNameArr = newName.split('');
  var chunk = Math.floor(newName.length / 4);
  var newIndex = (index-1) * chunk;

  for(var i = newIndex; i < newName.length; i += chunk) {
    return newName.substr(i, chunk);
  }
}

    export default {
      data() {
        return {
          allBirds: [],
          legImg: null,
          wingImg: null,
          headImg: null,
          bodyImg: null,

          bodyName: '',
          legName: '',
          wingName: '',
          headName: '',
          newName: ''
        }
      },
      mounted() {
        axios.get('/api/all-birds').then(response => this.allBirds = response.data);

        var draggableElems = document.querySelectorAll('.draggable');
        var draggies = [];
        for(var i=0, len = draggableElems.length; i < len; i++) {
          var draggableElem = draggableElems[i];
          var draggie = new draggabilly(draggableElem, {
          });
          draggies.push(draggie);
        }
      },
      methods: {
        onClickBody: function(value) {
          this.bodyImg = this.allBirds[value].body_img;
          this.bodyName = breakLatinName(this.allBirds[value].lat_name, 4);
        },
        onClickLeg: function(value) {
          this.legImg = this.allBirds[value].legs_img;
          this.legName = breakLatinName(this.allBirds[value].lat_name, 3);
        },
        onClickWing: function(value) {
          this.wingImg = this.allBirds[value].wing_img;
          this.wingName = breakLatinName(this.allBirds[value].lat_name, 2);
        },
        onClickHead: function(value) {
          this.headImg = this.allBirds[value].head_img;
          this.headName = breakLatinName(this.allBirds[value].lat_name, 1);
        }
      },
      computed: {
        newNames: function() {
          var tempName = this.newName.concat(this.bodyName, this.legName, this.wingName, this.headName);
          return tempName.charAt(0).toUpperCase() + tempName.slice(1);
        }
      }
    }
</script>

<style>
</style>
