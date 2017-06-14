<template>
  <div class="--bird-form-main-container">

  <div class="--bird-form-container" v-bind:style="{ opacity: 1 - (top / windowHeight) * 0.2 }">
    <div class="--bird-form-text-container">

      <div class="--bird-form-subcontainer">
        <p class="--bird-form-text">
          Pay attention to this feathered specimen! It is probably a flying animal that mainly consists out of a
          <select-bird v-bind:allBirds="allBirds" @clicked="onClickBody"></select-bird>.
      </p>
      </div>

      <div class="--bird-form-subcontainer">
        <p class="--bird-form-text">
          When observing how the creature is walking, it looks like the paws are that from a
          <select-bird v-bind:allBirds="allBirds" @clicked="onClickLeg"></select-bird>
          while the wings are that from a <select-bird v-bind:allBirds="allBirds" @clicked="onClickWing"></select-bird>.
        </p>
      </div>

      <div class="--bird-form-subcontainer">
        <p class="--bird-form-text">
          Before the obscure bird-like specimen takes flight it turns around. Looking at it's beak, eyes and color, I am bewildered to see that the head is that from a
          <select-bird v-bind:allBirds="allBirds" @clicked="onClickHead"></select-bird>.
        </p>
      </div>

      <div class="--bird-form-subcontainer">
        <p class="--bird-form-text">
          I am confident that I have never seen this bird before and therefore shall name it:
        </p>
      </div>

    </div>

  </div>

  <p class="--bird-form-name">{{ newNames }}</p>

  <div class="--image-container" v-bind:style="{ zIndex: birdZIndex }">
    <bird-image v-bind:image="bodyImg" class="draggable"></bird-image>
    <bird-image v-bind:image="legImg" class="draggable"></bird-image>
    <bird-image v-bind:image="wingImg" class="draggable"></bird-image>
    <bird-image v-bind:image="headImg" class="draggable"></bird-image>
  </div>

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
          newName: '',

          top: 0,
          windowHeight: 0,

          birdZIndex: -1
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
          this.bodyName = breakLatinName(this.allBirds[value].lat_name, 1);
        },
        onClickLeg: function(value) {
          this.legImg = this.allBirds[value].legs_img;
          this.legName = breakLatinName(this.allBirds[value].lat_name, 2);
        },
        onClickWing: function(value) {
          this.wingImg = this.allBirds[value].wing_img;
          this.wingName = breakLatinName(this.allBirds[value].lat_name, 3);
        },
        onClickHead: function(value) {
          this.headImg = this.allBirds[value].head_img;
          this.headName = breakLatinName(this.allBirds[value].lat_name, 4);
        },

        handleScroll: function() {
          this.top = window.scrollY;

          if(this.top >= this.windowHeight - 20) {
            this.birdZIndex = 10;
            console.log('yes');
          }
          if(this.top <= this.windowHeight - 10) {
            this.birdZIndex = -1;
          }
        }
      },
      computed: {
        newNames: function() {
          var tempName = this.newName.concat(this.bodyName, this.legName, this.wingName, this.headName);
          return tempName.charAt(0).toUpperCase() + tempName.slice(1);
        }
      },
      created() {
        window.addEventListener('scroll', this.handleScroll);
        this.windowHeight = window.innerHeight;
      },
      destroyed() {
        window.removeEventListener('scroll', this.handleScroll);
      }
    }
</script>

<style>
</style>
