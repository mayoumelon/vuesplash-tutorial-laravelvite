<template>
  <h1><slot></slot></h1>
  <p> I'm an example component.</p>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
