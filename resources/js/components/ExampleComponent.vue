<template>
  <h1><slot></slot></h1>
  <p> I'm an example componentでしょうねわわわわわ</p>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
