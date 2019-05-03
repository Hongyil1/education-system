<template>
    <div>
      <h1 class="learn">This is from Learn</h1>
    </div>
</template>

<script>
  export default {
     mounted() {
        console.log('This is from Learn.')
    },
  }

</script>

<style>
   .learn {
      background-color: yellow;
      color: #fff;
      padding: 10px 20px;
      font-weight: bold;
    }
</style>
