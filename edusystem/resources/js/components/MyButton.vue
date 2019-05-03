<template>
    <div class="">
        <button  class="my-button" v-text="text"></button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            // axios used to featch data
            // Featch data from backend and forward it to front end
            axios.post('api/vue', {})
                .then(response => {
                  this.test = response.data;
                });
        },

        data: function(){
          return {
            test: null,
          }
        },

        // The property of the <my-button> label
        props: [
          'text',
          'type'
        ]
    }
</script>

<style>
    .my-button {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      font-weight: bold;
    }
</style>
