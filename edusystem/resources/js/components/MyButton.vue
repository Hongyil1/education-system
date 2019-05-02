<template>
    <div class="">
        <button type="submit" name="button" class="my-button">My Button</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .my-button {
      background-color: #333;
    }
</style>
