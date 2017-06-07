<template>
  <div class="container">

    <form method="POST" action="">

        <label for="email">E-Mail Address</label>
        <input v-model="email" type="email" name="email" value="" required autofocus>

        <label for="password" >Password</label>
        <input v-model="password" type="password" name="password" required>

        <button type="submit">
            Login
        </button>

    </form>

    <p>{{ email }}</p>

  </div>
</template>

<script>
    export default {
      data() {
        return {
          email: '',
          password: ''
        }
      },
      mounted() {
        console.log('Component mounted.')
      }
    }
</script>
