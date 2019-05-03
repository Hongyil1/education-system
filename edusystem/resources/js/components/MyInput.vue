<template>
  <div class="">
    My Name: <input type="text" name="" value="Kent">
    <!-- <input @input="handleInput" v-model="content"> -->
  </div>
</template>

<script>
  export default {
    mounted() {
       console.log('This is from MyInput.')
   },
   prop: ['value'],
   data() {
     return {
       content: this.value
     }
   },
   methods: {
     handleInput(e) {
       this.$emit('input', this.content)
     }
   }
  }
</script>

<style>

</style>
